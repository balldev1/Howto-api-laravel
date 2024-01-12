<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = [
            'message1' => 'I am from api Controller',
            'status1' => 'success',
            'message2' => 'I am from api Controller',
            'status2' => 'success',
            'message3' => 'I am from api Controller',
            'status3' => 'success',
        ];

        return response()->json($data);
    }
}
