<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{

    use HasFactory, Notifiable;


    protected const IS_USER = 1;
    protected const IS_ADMIN = 2;
    protected const IS_SADMIN = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

        protected $fillable = [
            'role',
            'name',
            'email',
            'avatar',
            'phone',
            'gender',
            'password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
/* 
---------------------------------------------------------------------
| The relationship for the user model
---------------------------------------------------------------------
*/
        public function transaction()
        {
            return $this->hasMany(Transaction::class);
        }
        
        public function orders()
        {
            return $this->hasMany(Order::class);
        }
        
        public function addresses()
        {
            return $this->hasMany(Address::class); 
        }

        public function products()
        {
            return $this->hasMany((Products::class));
        }

/* 
---------------------------------------------------------------------
| The Middleware methods for the user model 
---------------------------------------------------------------------
*/

}
