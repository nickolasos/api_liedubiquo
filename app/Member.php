<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $connection = 'members';
    use Notifiable;
   
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_member_hash($username){
        $hash = Member::where('username', $username)->value('password');
        return $hash;
    }

    public function get_member($username){
        
        return json_encode(Member::select('memberID','username','email')->where('username', $username)->first());
        
        
    }




}