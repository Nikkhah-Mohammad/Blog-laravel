<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articale';

    protected $fillable =[
        'id',
        'user_id',
        'title',
        'content',
        'avatar',
        'delete'
    ];

    protected $hidden =[
           'created_at','updated_at '
    ];
}
