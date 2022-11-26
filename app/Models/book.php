<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $primaryKey = 'book_id';
    protected $fillable = ['room_number', 'guest_name', 'room_type', 'arrival_date', 'daparture_date'];


    public function checkIn(){
        return $this->hasOne(app\Models\checkIn::class);
    }
}
