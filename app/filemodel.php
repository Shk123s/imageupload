<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filemodel extends Model
{
    protected $table = "fiels"; 
    protected $fillable = ["filename"];
}
