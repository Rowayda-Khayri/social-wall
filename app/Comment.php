<?php

namespace App;

use Moloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Comment extends Moloquent
{
    use SoftDeletes;
 
    protected $connection = 'mongodb';
    
}
