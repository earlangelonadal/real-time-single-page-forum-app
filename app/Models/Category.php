<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $guarded = [];
    // instead of ID search sa post man
    public function getRouteKeyName(){
        return 'slug';
    }
}
 