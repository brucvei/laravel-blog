<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "AAAAAAAAAAAAAAAAA";
    }

    public function create()
    {
        return "criar um curso";
    }

    public function show($curso)
    {
        return "$curso";
    }
}
