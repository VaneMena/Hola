<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorAcademicoController extends Controller
{
    public function DirectorAcademicoDashboard(){ 
        return view('director_academico.director_academico_dashboard');
    }
}
