<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','property_id','card_number','cardholder_name','expired_date','cug_number'
    ];

    public function property (){
        return $this->belongsTo(property::class, 'property_id');
    }
    public function users (){
        return $this->belongsTo(User::class);
    }
}
