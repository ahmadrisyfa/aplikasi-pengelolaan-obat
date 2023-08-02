<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table ='obat';
    protected $guarded = ['id'];

    public function jenisobat()
    {
        return $this->belongsTo(JenisObat::class, 'id_jenis_obat');
    }
}
