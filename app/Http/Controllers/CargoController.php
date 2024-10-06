<?php

namespace App\Http\Controllers;

use App\Models\cargo;
use Illuminate\Http\Request;

/**
 * Class CargoController
 * @package App\Http\Controllers
 */
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = cargo::paginate();

        return view('cargo.index', compact('cargos'))
            ->with('i', (request()->input('page', 1) - 1) * $cargos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo = new cargo();
        return view('cargo.create', compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(cargo::$rules);

        $cargo = cargo::create($request->all());

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = cargo::find($id);

        return view('cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = cargo::find($id);

        return view('cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cargo $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cargo $cargo)
    {
        request()->validate(cargo::$rules);

        $cargo->update($request->all());

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo editado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cargo = cargo::find($id)->delete();

        return redirect()->route('cargos.index')
            ->with('success', 'Cargo eliminado exitosamente');
    }
}
