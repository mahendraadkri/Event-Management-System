<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'category_id'
    ];
    
    public function attendees(){
        return $this->hasMany(Attendee::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
