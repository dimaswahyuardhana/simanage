<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Income::class);
        return $this->belongsTo(Expenditure::class);
        return $this->belongsTo(Debt::class);
    }
}
