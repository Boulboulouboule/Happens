<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterReferent extends Model
{
    protected $fillable = ['name', 'account'];
    protected $table = 'twitter_referent';


}
