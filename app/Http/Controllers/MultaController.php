<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Elemento;
use App\Models\Persona;
use App\Models\Vehiculo;
use App\Models\Usuario;
use Illuminate\Http\Request;

/**
 * Class MultaController
 * @package App\Http\Controllers
 */
class MultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $multas = Multa::paginate();
        $elemento = Elemento::pluck('nombre_elemento', 'id');
        $vehiculo = Vehiculo::pluck('placa', 'id');
        $usuario = Usuario::pluck('nombre_usuario', 'id');
        $persona = Persona::pluck('nombre', 'id');
        return view('multa.index', compact('multas','elemento','vehiculo','usuario','persona'))
            ->with('i', (request()->input('page', 1) - 1) * $multas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $multa = new Multa();
        $elemento = Elemento::pluck('nombre_elemento', 'id');
        $vehiculo = Vehiculo::pluck('placa', 'id');
        $usuario = Usuario::pluck('nombre_usuario', 'id');
        $persona = Persona::pluck('nombre', 'id');
        return view('multa.create', compact('multa','elemento','usuario','vehiculo','persona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Multa::$rules);

        $multa = Multa::create($request->all());

        return redirect()->route('multas.index')
            ->with('success', 'Multa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $multa = Multa::find($id);
        $elemento = Elemento::pluck('nombre_elemento', 'id');
        $vehiculo = Vehiculo::pluck('placa', 'id');
        $usuario = Usuario::pluck('nombre_usuario', 'id');
        $persona = Persona::pluck('nombre', 'id');
        return view('multa.show', compact('multa','vehiculo','elemento','usuario','persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $multa = Multa::find($id);
        $elemento = Elemento::pluck('nombre_elemento', 'id');
        $vehiculo = Vehiculo::pluck('placa', 'id');
        $usuario = Usuario::pluck('nombre_usuario', 'id');
        $persona = Persona::pluck('nombre', 'id');
        return view('multa.edit', compact('multa','vehiculo','elemento','usuario','persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Multa $multa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Multa $multa)
    {
        request()->validate(Multa::$rules);

        $multa->update($request->all());

        return redirect()->route('multas.index')
            ->with('success', 'Multa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $multa = Multa::find($id)->delete();

        return redirect()->route('multas.index')
            ->with('success', 'Multa deleted successfully');
    }
}
