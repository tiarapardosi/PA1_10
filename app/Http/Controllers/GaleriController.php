<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function Galeri()
    {
        return view('Galeri\index');
    }
}
