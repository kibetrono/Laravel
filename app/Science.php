<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Science extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'sciences';
    
    protected $fillable = [
        'site_title', 'site_link','site_keywords','site_description','filename',
    ];
}
