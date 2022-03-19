<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Http\Request;

class MemberController extends Controller
{
    // 登録画面        
    public function register()
    {
        return view('register');
    }

    //　登録ボタン：データベースへ送信  
    public function memberRegister(Request $request)
    {
        // 新しくレコードを追加する
        $member = new Member();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('/top');
    }



    // 一覧画面        
    public function top()
    {
    // Memberテーブルに入っているレコードを全て取得する
    $member = Member::all();
    \Log::channel('debug')->info($member);
        return view('top')->with([
            'member' => $member,
        ]);
    }

    // 編集ボタン：会員情報の画面に遷移
    public function edit(Request $request)
    {
        // リクエストのデータをlogに出力
        // ¥Log::channel(7deug')->info('edit時に送信するID')
        // ¥Log::channel('debug')->info($request->id)-->first();
        // 一覧から指定されたIDと同じIDレコードを取得する
        $member = Member::where ('id', '=', $request->id )->first();
        return view('edit')->with([
            'member' => $member,
        ]);
    }


    // 編集の保存      
    public function memberEdit(Request $request)
    {
        // 既存のレコードを取得して、編集してから保存する
        $member = Member::where('id', '=', $request->id)->first();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();
        
        return redirect('/top');
    }

    // 編集の削除       
    public function memberDelete(Request $request)
    {
    // 既存のレコードを取得して、削除する
        $member = Member::where('id', '=', $request->id)->first();
        $member->delete();
    
        return redirect('/top');
    }

}
