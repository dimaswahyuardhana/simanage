<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_expenditure';
    protected $fillable = [
        'keterangan_pengeluaran',
        'jumlah_pengeluaran'
    ];

    // public function expenditures()
    // {
    //     return $this->hasMany(Monthly::class);
    // }
}
