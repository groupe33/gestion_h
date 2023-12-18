<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dasboardAdministrateur() {

        return view ('back_end.administrateur');
    }

    public function dasboardMedecins() {

        return view ('back_end.medecin');
    }

    public function dasboardPatients() {

        return view ('back_end.patient');
    }
}

