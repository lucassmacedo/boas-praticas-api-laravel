<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

	use UuidTrait;

    public    $incrementing = false;
    
    protected $fillable = [
	    'name',    
	    'slug',     
	    'body',     
	    'release',  
	    'locale',   
	    'duration', 
	    'sinopse',  
	    'cover',    
    ];
}
