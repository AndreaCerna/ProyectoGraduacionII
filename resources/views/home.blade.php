@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="text-primary-emphasis">Bienvenido al Sistema de Multas de la Policía Municipal de Tránsito de Puerto Barrios, Izabal</h1>
    </div>

    <br>

    <style>
        .container {
            text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col-md-2 {
            margin: 5px;
            transition: background-color 0.3s;
        }

        .col-md-2:hover {
            background-color: #052c65;
        }
    </style>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ url('/cargos') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Registrar Cargos</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ url('/elementos') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">Registrar Elementos</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ url('/multas') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Registrar Multas</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ url('/usuarios') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">Registrar Usuarios</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ url('/vehiculos') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">Registrar Vehículos</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-2">
                <a href="{{ url('/personas') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">Registrar Personas</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{ url('/multaspagadas') }}" class="text-decoration-none">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">Multas Pagadas</h4>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>

    <br>
    <br>
    <!-- IMAGENES -->
    <div class="row row-cols-4 row-cols-md-4 g-5">
        <div class="col">
            <div class="card">
                <img src="https://munipuertobarrios.gob.gt/wp-content/uploads/2018/09/PORTADA-NOTAS-1.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://munipuertobarrios.gob.gt/wp-content/uploads/2018/06/PORTADA-2-1.jpg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://izabaltv.com/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-07-at-2.49.49-PM-1024x683.jpeg" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="https://izabaltv.com/wp-content/uploads/2022/04/WhatsApp-Image-2022-04-07-at-2.50.16-PM.jpeg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>




@endsection



