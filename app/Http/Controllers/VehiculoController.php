<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\TipoPlaca;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

/**
 * Class VehiculoController
 * @package App\Http\Controllers
 */
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::paginate();
        $TipoPlacas= TipoPlaca::pluck('tipo', 'id');
        return view('vehiculo.index', compact('vehiculos','TipoPlacas'))
            ->with('i', (request()->input('page', 1) - 1) * $vehiculos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = new Vehiculo();
        $tipo = TipoPlaca::pluck('tipo', 'id');
        return view('vehiculo.create', compact('vehiculo','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo = Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id)->delete();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo deleted successfully');
    }

    public function buscar()
    {
        $tiposPlacas = TipoPlaca::all();
        return view('vehiculo.buscar',compact('tiposPlacas'));
    }
    public function resultados(Request $request)
    {

        $tipoPlacaId = $request->input('tipo_placa');
        $numeroPlaca = $request->input('numero_placa');

        $vehiculos = Vehiculo::where('tipo_placas_id', $tipoPlacaId)
            ->where('placa', $numeroPlaca)
            ->get();
        $tiposPlacas = TipoPlaca::all();
        $vehiculoIds = $vehiculos->pluck('id');
        $multas = Multa::whereIn('vehiculos_id', $vehiculoIds)->get();

        return view('vehiculo.buscar', compact('vehiculos', 'tiposPlacas','multas'));
    }

    public function pago()
    {
        return view('pago.pago');
    }

    public function procesar_pago()
    {
        return redirect()->route('buscar')->with('success', 'Pago exitoso');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
