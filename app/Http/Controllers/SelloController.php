<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelloController extends Controller
{
   public function sendingInfo()
   {
      $URL = "https://condoc.dgae.unam.mx/resgitroTitulos/request/firma";
      $datos = "||1.0|3|MUOC810214HCHRCR00|Director de Articulación de Procesos|SECRETARÍA DE EDUCACIÓN|Departamento de Control Escolar|23DPR0749T|005|23|SOSE810201HDFRND05|EDGAR|SORIANO|SANCHEZ|2|7.8|2017-01-01T12:05:00||";
      $curp = "SOSE810201HDFRND05";
      $idSesion = session_id();
      return view('/menus/sendingCadena', compact('URL', 'datos', 'curp', 'idSesion'));
   }
}
