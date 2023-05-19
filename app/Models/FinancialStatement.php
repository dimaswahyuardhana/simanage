<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialStatement extends Model
{
    use HasFactory;

    protected $table = 'financial_statements';

    protected $fillable = [
        'id_finance',
        'total_pemasukan',
        'total_pengeluaran',
        'total_hutang',
        'laba',
        'tanggal',
    ];
}
