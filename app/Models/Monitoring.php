<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Monitoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'site_id',
        'kondisi',
        'keterangan'
    ];

    public function sites(): BelongsTo
    {
        return $this->belongsTo(Site::class, 'site_id');
    }
}
