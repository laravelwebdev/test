<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class DaftarArtikel extends Model
{
    public function daftarArtikelable(): MorphTo
    {
        return $this->morphTo();
    }
}
