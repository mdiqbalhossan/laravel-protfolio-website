<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $time = date('Y-m-d H:i:sa');

        $visitor = new Visitor();
        $visitor->ip_address = $ip;
        $visitor->visit_time = $time;
        $visitor->save();

        return view('home');
    }
}
