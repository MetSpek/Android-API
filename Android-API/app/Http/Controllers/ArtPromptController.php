<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArtPromptController extends Controller
{
    public function bnw(){
        //haal alle bijvoegelijk naamwoorden op
        $bnw = \App\Models\BijvoegelijkNaamwoord::all();
        return ['bnw' => $bnw];
    }

    public function znw(){
        //haal alle zelfstandige naamwoorden op
        $znw = \App\Models\ZelfstandigNaamwoord::all();
        return ['znw' => $znw];
    }

}