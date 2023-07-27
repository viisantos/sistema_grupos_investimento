<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $table    = 'user_socials';
    protected $hidden   = ['updated_at', 'created_at'];
    protected $fillable = [
        'user_id',
        'social_network',
        'social_id',
        'social_email',
        'social_avatar'
    ];
}
