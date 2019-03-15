<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;



class utilisateur extends Model   implements Authenticatable{

    use BasicAuthenticatable;

    protected $fillable = ['email', 'password'];
    
}


