<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Site extends Model
{
    use HasFactory;
    protected $fillable =[
        'opd_id',
        'uptd_id',
        'domain',
        'lokasi_server',
        'jenis_layanan',
        'jenis_aset',
        'tahun',
        'sumber_dana',
        'nilai',
        'deskripsi',
        'kak',
        'probis',
        'manual_book',
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function uptd()
    {
        return $this->belongsTo(Uptd::class);
    }

    public function validasi(): HasOne
    {
        return $this->hasOne(Validasi::class);
    }

    public function monitoring(): HasOne
    {
        return $this->hasOne(Monitoring::class);
    }
}