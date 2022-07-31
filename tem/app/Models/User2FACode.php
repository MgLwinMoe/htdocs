<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2FACode extends Model
{
    use HasFactory;
    protected $table="user_2fa_codes";
    protected $fillable = [
        'user_id',
        'code',
    ];
}
