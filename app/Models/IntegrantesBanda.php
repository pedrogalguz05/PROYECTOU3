<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cantante;
use App\Models\Banda;

class IntegrantesBanda extends Model
{
    public function cantante()
    {
        return $this->belongsTo('app\Models\cantante');
    }

    public function banda()
    {
        return $this->belongsTo('app\Models\Banda');
    }
}
