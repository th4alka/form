<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = ['name_last', 'name_first', 'company', 'email', 'tel'];
    protected $dates =  ['created_at', 'updated_at'];
}
