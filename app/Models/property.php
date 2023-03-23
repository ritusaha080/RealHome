<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class property extends Model
{
    use HasFactory;
    protected $fillable = [
       'client', 'title','description','image','price','category_id'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function payment()
    {
        return $this->hasOne(payment::class,'property_id');
    }
}
