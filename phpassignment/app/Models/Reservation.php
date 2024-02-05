<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    protected $fillable = ['customer_name', 'email', 'phone', 'reservation_date', 'reservation_time', 'guests', 'status'];

        public function getRouteKeyName()
{
    return 'id';
}
public function user()
{
    return $this->belongsTo(User::class);
}

}
