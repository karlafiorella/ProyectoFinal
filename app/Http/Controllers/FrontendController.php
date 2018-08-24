<?php

namespace App\Http\Controllers;
use App\Carrusel;
use App\Featured;
use App\Servicio;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
           //Paginate(4) me dice cuantos registros voy a mostrar en la página
           //OrdenBy me da en que order voy a mostrar los registros asd or desc

            $carrusels = Carrusel::orderBy('id', 'asc')->paginate(5);
            $featureds = Featured::orderBy('id', 'asc')->paginate(3);
            $servicios = Servicio::orderBy('id', 'asc')->paginate(6);

           //Coloco las tablas que voy a mostrar en el welcome
           //$products2 = Product::orderBy('id', 'desc')->paginate(3);
           //$products3 = Product::orderBy('id', 'desc')->paginate(3);

           //Si temgo varias paginas debo hacer un metodo para cada uno de ellas
            return view('welcome', compact('carrusels','featureds','servicios'));
        }

    public function __construct()
    {
        $this->middleware('auth');
    }

}