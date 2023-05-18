<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_finance';

    protected $fillable = [
        'keterangan',
        'jumlah_uang',
        'id_kategori'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
