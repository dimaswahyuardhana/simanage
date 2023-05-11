<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'SumberPendapatan',
        'JumlahPemasukan'
    ];

    public function incomes()
    {
        return $this->hasMany(Monthly::class);
    }
}
