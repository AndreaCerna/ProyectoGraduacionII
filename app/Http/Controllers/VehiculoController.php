<?php

namespace App\Http\Controllers;

use App\Models\estado;
use App\Models\multa;
use App\Models\TipoPlaca;
use App\Models\vehiculo;
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
        $vehiculos = vehiculo::paginate();
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
        $vehiculo = new vehiculo();
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
        request()->validate(vehiculo::$rules);

        $vehiculo = vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = vehiculo::find($id);

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
        $vehiculo = vehiculo::find($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
        request()->validate(vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo editado exitosamente!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vehiculo = vehiculo::find($id)->delete();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo eliminado exitosamente!');
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

        $vehiculos = vehiculo::where('tipo_placas_id', $tipoPlacaId)
            ->where('placa', $numeroPlaca)
            ->get();
        $tiposPlacas = TipoPlaca::all();

        $vehiculoIds = $vehiculos->pluck('id');
        $multas = multa::whereIn('vehiculos_id', $vehiculoIds)->get();

        $estados = estado::all();
        return view('vehiculo.buscar', compact('vehiculos', 'tiposPlacas','multas','estados'));
    }

    public function pago(Request $request)
    {
        $multa_id = $request->input('multa_id');
        $multa = multa::find($multa_id);
        if (!$multa) {
            return redirect()->route('pago', ['multa_id' => $multa_id])->with('success', 'Pago realizado con éxito!');
        }

        return view('pago.pago', compact('multa'));
    }

    public function procesar_pago(Request $request)
    {
        $multaId = $request->input('multa_id'); // Asegúrate de tener un campo oculto en el formulario para almacenar el ID de la multa
        $multa = multa::find($multaId);

        if ($multa) {
            $multa->update(['estados_id' => 2]);
        }

        return redirect()->route('pago', ['multa_id' => $multaId])->with('success', 'Pago realizado con éxito!');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
