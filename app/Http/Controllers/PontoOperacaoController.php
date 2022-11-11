<?php

namespace App\Http\Controllers;

use App\Models\PontoOperacao;
use Illuminate\Http\Request;

class PontoOperacaoController extends Controller
{
   public function index(){

    $geojson = PontoOperacao::all();
    return view('welcome');
   }
}
