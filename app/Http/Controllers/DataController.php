<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function open()
    {

        return response()->json(['message' => 'this data is open for all users']);
    }
    public function closed()
    {

        return response()->json(['message' => 'this data is for authenticated users only']);
    }
}
