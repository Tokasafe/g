<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskConsequence extends Model
{
    use HasFactory;
    protected $table = 'risk_consequences';
    protected $guarded = ['id'];

    public function scopeSearch($query, $term)
    {

        $query->where('name', 'LIKE', '%' . $term . '%');
    }

}
