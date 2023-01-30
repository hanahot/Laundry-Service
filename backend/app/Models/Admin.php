<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'appointment_no',
        'customer_address',
        'type_of_service',
        'total',
        'driver_name',
        'book_date',
        'date_delivered'

    ];
    use HasFactory;
}
