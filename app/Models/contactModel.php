<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['email', 'title', 'message'];
}
