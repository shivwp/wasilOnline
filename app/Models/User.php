<?php







namespace App\Models;







use Illuminate\Contracts\Auth\MustVerifyEmail;



use Illuminate\Database\Eloquent\Factories\HasFactory;



use Illuminate\Foundation\Auth\User as Authenticatable;



use Illuminate\Notifications\Notifiable;



use Laravel\Passport\HasApiTokens;



use Laravel\Cashier\Billable;







class User extends Authenticatable



{



    use HasFactory, Notifiable,HasApiTokens,Billable;







    /**



     * The attributes that are mass assignable.



     *



     * @var array



     */



    protected $fillable = [



        'first_name',



        'last_name',



        'email',



        'password',



        'user_wallet',


        'default_card'



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











    public function roles()



    {



        return $this->belongsToMany(Role::class);







    }







    public function withdrow()



    {



        return $this->belongsToMany(Withdrow::class,'vendor_id');







    }







    public function coupn()



    {



        return $this->belongsToMany(Coupon::class);







    }



    public function order(){

        return $this->hasMany(Order::class); 

    }





    public function cities()



    {



        return $this->belongsToMany(City::class);







    }







}



