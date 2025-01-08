<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Menambahkan atribut yang diizinkan untuk mass assignment
    protected $fillable = [
        'id_order',      // id_order perlu ditambahkan di sini
        'id_member',
        'jumlah',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'detail_alamat',
        'status',
        'no_rekening',
        'atas_nama',
    ];

    // Relasi dengan model Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }
}
