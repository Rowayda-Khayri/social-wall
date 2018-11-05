<?php

namespace App;

use Moloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Post extends Moloquent
{
    use SoftDeletes;
 
    protected $connection = 'mongodb';
    
    protected $collection = 'posts';
    
    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'author', 'likes1', 'likes2', 'shares'
    ];
}
