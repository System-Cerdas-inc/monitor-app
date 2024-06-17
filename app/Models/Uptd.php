<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Uptd extends Model
{
    use HasFactory;

    protected $fillable = [
        'opd_id',
        'nama_uptd',
        'alias_uptd',
        'alamat',
        'email',
        'secondemail'
    ];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    public function site()
    {
        return $this->hasMany(Site::class);
    }

}
