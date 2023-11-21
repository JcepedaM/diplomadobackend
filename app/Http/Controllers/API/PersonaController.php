<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Persona;

class PersonaController extends Controller
{
    //
    public function get(){


        try{

            $data = Persona::get();
            return response()->json($data,200);





        }catch (\Throwable $th){

            return response()->json(['error' => $th ->getMesssage()],500);

        }



    }













}
