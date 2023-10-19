<?php

namespace App\Http\Controllers;

use App\Models\TipoPlaca;
use Illuminate\Http\Request;

/**
 * Class TipoPlacaController
 * @package App\Http\Controllers
 */
class TipoPlacaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoPlacas = TipoPlaca::paginate();

        return view('tipo-placa.index', compact('tipoPlacas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoPlacas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoPlaca = new TipoPlaca();
        return view('tipo-placa.create', compact('tipoPlaca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoPlaca::$rules);

        $tipoPlaca = TipoPlaca::create($request->all());

        return redirect()->route('tipo-placas.index')
            ->with('success', 'TipoPlaca created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoPlaca = TipoPlaca::find($id);

        return view('tipo-placa.show', compact('tipoPlaca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoPlaca = TipoPlaca::find($id);

        return view('tipo-placa.edit', compact('tipoPlaca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoPlaca $tipoPlaca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPlaca $tipoPlaca)
    {
        request()->validate(TipoPlaca::$rules);

        $tipoPlaca->update($request->all());

        return redirect()->route('tipo-placas.index')
            ->with('success', 'TipoPlaca updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoPlaca = TipoPlaca::find($id)->delete();

        return redirect()->route('tipo-placas.index')
            ->with('success', 'TipoPlaca deleted successfully');
    }
}
