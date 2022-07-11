<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomProduct extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'category','description'];
    
    public function images()
    {
        // "App\images"  replace this with image classs when not optimal
        return $this->morphMany(Image::class, 'imager'); 
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class); 
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
