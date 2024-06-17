<?php

namespace App\Models;

use App\Http\Controllers\SiteController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class validasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'status',
        'status_validasi',
        'catatan'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
