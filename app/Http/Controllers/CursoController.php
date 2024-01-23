<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        $curso = Curso::paginate();
        // return $curso;
        return view('curso.index', compact('curso'));
    }

    public function create()
    {
        return view('curso.create');
    }

    public function show($curso)
    {
        return view('curso.show', compact('curso'));
    }
}
