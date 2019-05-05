<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Evaluator extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'evaluator';
    protected $fillable = ['nama', 'jabatan', 'email', 'password'];
}
