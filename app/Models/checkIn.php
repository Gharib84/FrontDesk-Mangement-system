<?php

namespace App\Models;
use App\Models\invoice;
use App\Models\book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkIn extends Model
{
    use HasFactory;
    protected $primaryKey = 'checkIn_id';
    protected $fillable = ['room_number', 'Guest_Name','Room_Type', 'Arrival_Date', 'Departure_Date', 'pax'];


    public function invoices(){
       return $this->hasMany(invoice::class,'invoice_fk');
    }

    public function book(){
        return $this->hasOne(book::class);
    }




}
