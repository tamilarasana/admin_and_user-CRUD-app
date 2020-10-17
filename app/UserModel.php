<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   	protected $table      = 'users';
    protected $primaryKey = 'id';

     protected $fillable = [
        'select', 'name', 'phone', 'email','password', 'address',
    ];
}
