<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama_opd',
        'alias_opd',
        'alamat',
        'email',
        'secondemail'
    ];

    public function uptd()
    {
        return $this->hasMany(Uptd::class);
    }

    public function site()
    {
        return $this->hasMany(Site::class);
    }
}
