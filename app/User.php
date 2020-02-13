<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function permissionsList(){
        $roles = $this->roles;
        $permissions = [];
        foreach ($roles as $role){
            $permissions[] = $role->permissions()->pluck('name')->implode(',');
        }
       return collect($permissions);
    }

    public function permissions(){
        $permissions = [];
        $role = $this->roles->first();
        $permissions = $role->permissions()->get();
        return $permissions;
    }

    public function isAdmin(){
        $is_admin =$this->roles()->where('name','admin')->first();
        if($is_admin != null){
            $is_admin = true;
        }else{
            $is_admin = false;
        }
        return $is_admin;
     }

     public function isTeacher(){
        $is_teacher =$this->roles()->where('name','teacher')->first();
        if($is_teacher != null){
            $is_teacher = true;
        }else{
            $is_teacher = false;
        }
        return $is_teacher;
     }

     public function isUser(){
        $is_user =$this->roles()->where('name','user')->first();
        if($is_user != null){
            $is_user = true;
        }else{
            $is_user = false;
        }
        return $is_user;
     }

      public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
