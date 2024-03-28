<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;
    protected $table = 'event_categories';
    protected $guarded = ['id'];

    public function scopeSearch($query, $term)
    {

        $query->where('name', 'LIKE', '%' . $term . '%');
    }

}
