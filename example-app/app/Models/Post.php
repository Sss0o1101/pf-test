<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [       //fillable プロパティは、モデルの属性を指定する
        'title',
        'body',
    ];

    //Post モデルと Comment モデルの関係を定義する

    // $post->comments 
    public function comments() {
        return $this->hasMany(Comment::class);
    }





}
