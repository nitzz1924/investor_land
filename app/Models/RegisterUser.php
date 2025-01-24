<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class RegisterUser extends Authenticatable
{
    use Notifiable;
    protected $table = 'register_users';

    protected $fillable = [
        'user_type',
        'name',
        'mobile',
        'email',
        'password',
        'verification_status',
        'company_name',
        'company_document',
        'profile_photo_path',
    ];
}
