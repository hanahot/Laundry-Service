<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        return Appointment::create([
            "full_name" => $request->full_name,
            "address" => $request->address,
            "phone_number" => $request->phone_number,
            "email" => $request->email,
            "type_of_service" => $request->type_of_service,
            "price" => $request->price,
            "clothes_weight" => $request->clothes_weight,
            "total_payment" => $request->total_payment,
            "available_time" => $request->available_time,
            "available_date" => $request->available_date,

        ]);
    }
}
