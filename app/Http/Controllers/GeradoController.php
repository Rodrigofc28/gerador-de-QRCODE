<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeradoController extends Controller
{
    public function create(Request $request){
      //  dd($request->ip());  metodo para retornar ip
      
      $path=base_path('app\scritps\arquivo.py');  //variavel que armazena o caminho do script em python
      chmod('C:\Users\e\Desktop\projetoZero\dragao\public\image',0755);
      
       $out=shell_exec('python ' .$path.' '.$request->qrcode ); //executa o arquivo e passa um parametro pra ele vinda do request(cuidado com os espaços que tem que ter)
      
       
    
    $output = utf8_decode($out); //codifica para utf8
    
    $output = iconv('ISO-8859-1', 'UTF-8', $output); //converte em UTF-8
    $output=trim($output); //tira espaços
    
    return view('index',compact('output')); //retorna na pagina
    
    }
    public function store($request){
      
      $pathToFile = public_path($request);
    return response()->download($pathToFile);
    }
}
