<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ragister extends Model
{
    use HasFactory;
    protected $table = 'ragisters';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
