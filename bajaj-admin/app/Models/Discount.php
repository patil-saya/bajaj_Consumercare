<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    
    protected $table = 'discount';
    //protected $fillable = ['state'];
    protected $fillable = ['created_at','customer_id','name','treatment_needed','date_of_admission','date_of_discharge','status'];

    public function specialities() {
        return $this->belongsTo('App\Models\Speciality', 'treatment_needed');
    }
}
