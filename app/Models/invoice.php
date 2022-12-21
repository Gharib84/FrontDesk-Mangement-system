<?php

namespace App\Models;
use App\Models\checkIn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;


    public function room(){
        $this->belongsTo(checkIn::class);
    }
}
