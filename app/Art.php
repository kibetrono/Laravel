<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Art extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'arts';
    
    protected $fillable = [
        'site_title', 'site_link','site_keywords','site_description','filename',
    ];
}
