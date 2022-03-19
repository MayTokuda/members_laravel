<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // モデルに関連付けるテーブル
    protected $table = 'members';
    // 登録・更新可能なカラムの指定
    use HasFactory;
    protected $fillable = ['name', 'tel', 'email','created_at','updated_at'];
}
