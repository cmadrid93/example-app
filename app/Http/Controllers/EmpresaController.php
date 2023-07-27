<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function viewEmpresa()
    {
         $usuario=usuario::find(1);
         $Empresa=$usuario->Empresa;
         dd($Empresa);
         return view('Empresa', ['Empresa'=>$Empresa-toArray()
         ]);
    }
}
