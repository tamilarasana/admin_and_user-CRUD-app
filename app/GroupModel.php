<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupModel extends Model
{
    protected $table      = 'group_master';
    protected $primaryKey = 'id';

     protected $fillable = [
        'title', 'select','check', 
    ];

    protected $casts =[
    	
     'check' => 'json'

      ];
}
