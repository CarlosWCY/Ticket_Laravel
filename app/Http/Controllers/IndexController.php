<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index(){
        //dd(Cliente::all());
        return inertia('Index/Index');
    }

    public function page(){
        return Inertia('Index/Pages');
    }

    public function form2(){
        return inertia(
            'Venta/Form2',
            [
                'clients'=>Cliente::all()
            ]
        );
    }


}
