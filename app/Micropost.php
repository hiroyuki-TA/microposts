<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
      protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorite_users()
    {
        /**belongsToMany() では
         * 第一引数に得られるModelクラス（User::class) を指定します。
         * 第二引数に中間テーブル（user_follow）を指定します。
         * 第三引数には中間テーブルに保存されている自分のidを示すカラム名（user_id）を指定します。
         * 第四引数には中間テーブルに保存されている関係先のidを示すカラム名（follow_id）を指定します
         * 
        */
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
      //                           Micropost or User
      
    }
}