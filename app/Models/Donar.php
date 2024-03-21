<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    protected $fillable = ['donarfullname', 'email', 'phone', 'Country'];
}
