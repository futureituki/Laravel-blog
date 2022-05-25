<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'memos'; // ここのテーブルの名前を間違えないように！
    protected $fillable = ['title', 'content'];
}
