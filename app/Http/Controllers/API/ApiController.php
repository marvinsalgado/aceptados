<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aceptados;


class ApiController extends Controller
{
    public function download()
    {
        $aceptados = Aceptados::limit(200)->get()->groupBy('cct')->toArray();
        $pdf = \PDF::loadView('pdf', compact( 'aceptados'));
        return $pdf->download('example'.'.pdf');
    }
}
