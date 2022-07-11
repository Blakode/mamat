<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id','title', 'category','description', 'type', 'amount','qty',]; 
    

    public function images()
    {
        return $this->morphMany(Image::class, 'imager');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot(['qty']);
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
