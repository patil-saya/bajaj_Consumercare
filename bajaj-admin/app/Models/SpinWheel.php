<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpinWheel extends Model
{
    
    protected $table = 'spinwheel_records';
    //protected $fillable = ['state'];
    protected $fillable = ['created_at','fullname','email','phoneno','result','status'];
}
