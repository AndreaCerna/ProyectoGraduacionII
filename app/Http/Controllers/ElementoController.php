<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Elemento;
use Illuminate\Http\Request;

/**
 * Class ElementoController
 * @package App\Http\Controllers
 */
class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elemento = elemento::paginate();
        $cargo = Cargo::pluck('nombre_cargo', 'id');

        return view('elemento.index', compact('elementos','cargo'))
            ->with('i', (request()->input('page', 1) - 1) * $elemento->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $elemento = new elemento();
        $cargo = Cargo::pluck('nombre_cargo', 'id');
        return view('elemento.create', compact('elemento','cargo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Elemento::$rules);

        $elemento = Elemento::create($request->all());

        return redirect()->route('elementos.index')
            ->with('success', 'Elemento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elemento = Elemento::find($id);
        $cargo = Cargo::pluck('nombre_cargo', 'id');

        return view('elemento.show', compact('elemento','cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elemento = Elemento::find($id);
        $cargo = Cargo::pluck('nombre_cargo', 'id');

        return view('elemento.edit', compact('elemento','cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Elemento $elemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Elemento $elemento)
    {
        request()->validate(Elemento::$rules);

        $elemento->update($request->all());

        return redirect()->route('elementos.index')
            ->with('success', 'Elemento editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $elemento = Elemento::find($id)->delete();

        return redirect()->route('elementos.index')
            ->with('success', 'Elemento eliminado exitosamente');
    }
}
