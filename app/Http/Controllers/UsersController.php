<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showDentists(){

        $dentists = User::with('role.dentist')->get();
        return response()->json($dentists);

    }

    public function dentistEvents($dentistID)
    {
        $dentist = User::with('role.dentist')->find($dentistID);

        if (!$dentist) {
            return response()->json(['message' => 'Dentist not found.'], 404);
        }

        return response()->json([
            'dentist' => $dentist->name,
            'events' => $dentist->events,
        ]);
    }
}
