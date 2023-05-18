<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_income';
    protected $fillable = [
        'sumber_pemasukan',
        'jumlah_pemasukan'
    ];

    // public function incomes()
    // {
    //     return $this->hasMany(Monthly::class);
    // }
}
