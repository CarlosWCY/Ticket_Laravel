<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class IndexController extends Controller
{
    public function index(){
        //dd(Cliente::all());
        return inertia('Index/Index');
    }

}
