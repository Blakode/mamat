<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','transaction_id','error','qty','status','address_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class)->withPivot(['qty']);
    }
    public function custom_products()
    {
        return $this->hasMany(CustomProduct::class)->withPivot(['qty']);
    }
}
