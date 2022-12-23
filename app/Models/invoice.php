<?php

namespace App\Models;
use App\Models\checkIn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'details'];
    protected $primaryKey = 'id';



    public function room(){
       return $this->belongsTo(checkIn::class,'room_id');
    }
}
