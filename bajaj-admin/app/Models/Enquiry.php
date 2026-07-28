<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'inquiries';
    protected $fillable = ['partner_id','customer_id'];

}
