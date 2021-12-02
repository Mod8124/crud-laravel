<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

use App\Http\Requests\storeCurso;

class CursoController extends Controller
{


    public function index() {
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        //$curso = Curso::all();
        //$curso = Curso::paginate();

        return  view('cursos.index', compact('cursos'));
    }

    public function create() {
        return view('cursos.create');
    }

    public function show($curso) {

        $curso = Curso::find($curso);
        return view('cursos.show', compact('curso'));
    }

    public function store(storeCurso $request) {

        // $curso = new Curso();

        // $curso->name= $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso = Curso::create($request->all());

     return   redirect()->route('cursos.show', $curso->id);
    }

    public function edit(Curso $curso) {
      return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso) {

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        // $curso->name= $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso) {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
