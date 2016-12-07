<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Advertisement;
use App\Http\Requests;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $advertisements  =   Advertisement::select( 'advertisements.*',
            DB::raw('(select name from users where id = advertisements.user_id ) as username'))->orderBy('created_at', 'DESC')->get();
        return view('home', ['advertisements' => $advertisements]);
    }
}
