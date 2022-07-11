<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'url','imager_type','imager_id']; 



    public function imager()
    {
        #this makes the image usable by two tables
        return $this->morphTo();
    } 

}
