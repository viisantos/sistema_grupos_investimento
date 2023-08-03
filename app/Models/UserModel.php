<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notification\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    //use Notifiable;

    protected $table    = 'users';
    protected $hidden   = ['updated_at', 'created_at','password','remember_token'];
    protected $fillable = [
        'cpf',
        'name',
        'phone',
        'birth',
        'gender',
        'notes',
        'email',
        'password',
        'status'
    ];








}
