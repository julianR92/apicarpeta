<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return response(['App'=>'Api Rest',
                    'Function' => 'Web Services Alcaldia de Bucaramanga',
                    'Model' => 2022
     ], 200);
});

Route::get('/holaaa', function () {
   //  $valor = 'PA';
   // $tipos = ['CC','NI', 'TI', 'CE', 'PA'];
   // foreach($tipos as $tipo){
   //   if($tipo == $valor){
   //      return true;
   //      break;
   //   }
   // }
   // return false;
   $documento = '1098719559';
   if(is_numeric($documento)){
      echo 'hola en el is';
    }else{
        echo 'else';
  }
//    if (preg_match(('/^[1-9][0-9]{0,15}$/'), $documento)) {
//       // return true;
//       echo 'verdadero';
//    }else if(strpos($documento, '?')){
//       // return false;
//       echo 'falso por ? ';
//    }else {
//      echo 'falso por demas caracteres';
//    // return false;

//   }
});
