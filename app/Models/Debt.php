<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_debt';
    protected $fillable = [
        'keterangan_hutang',
        'jumlah_hutang'
    ];

    // public function expenditures()
    // {
    //     return $this->hasMany(Monthly::class);
    // }
}
