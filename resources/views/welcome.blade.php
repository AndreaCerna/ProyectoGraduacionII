@extends('layouts.app')

@section('content')

    <!-- Contenido principal de la página -->
    <div class="container text-center">
        <br>
        <h1 class="text-primary-emphasis">POLICÍA MUNICIPAL DE TRÁNSITO DE PUERTO BARRIOS, IZABAL</h1>
        <br>
    </div>

    <div class="container text-center">
        <br>
        <h2 class="text-primary-emphasis">CONSULTA DE MULTAS</h2>
    </div>

    <!-- APARTADO DE CONSULTAS -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-6 text-center">
                <br>
                <img src="https://cdn-icons-png.flaticon.com/512/20/20699.png" alt="Imagen 1" width="200">
                <h3 class="text-primary-emphasis">Consulta Vehículos</h3>
                <div class="container">
                    <a href="{{url('/buscar')}}" class="btn btn-primary">Realizar Consulta</a>
                </div>
            </div>

            <div class="col-6 text-center">
                <br>
                <img src="https://cdn.icon-icons.com/icons2/621/PNG/512/magnifier-on-a-user_icon-icons.com_56923.png" alt="Imagen 2" width="200">
                <h3 class="text-primary-emphasis">Consulta Personas</h3>
                <div class="container">
                    <a href="{{url('/buscarP')}}" class="btn btn-primary">Realizar Consulta</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel de la Pagina Principal -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://munipuertobarrios.gob.gt/wp-content/uploads/2018/03/IMG_3489.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://munipuertobarrios.gob.gt/wp-content/uploads/2018/10/PORTADA-8-1-990x660.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://munipuertobarrios.gob.gt/wp-content/uploads/2018/05/Screenshot_11-1.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- APARTADO DE NOTICIAS -->
    <div class="container mt-5">
        <h2 class="text-center text-primary-emphasis">Noticias</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.soy502.com/sites/default/files/styles/full_node/public/2023/Abr/01/puerto_barrios.jpg" class="card-img-top" alt="Noticia 1">
                    <div class="card-body">
                        <h5 class="card-title">Altercado entre PMT y un Hombre</h5>
                        <p class="card-text">A través de las redes sociales circula un video en el que se muestra un altercado protagonizado por una agente de la PMT y un hombre, quien está grabando.
                            <br>
                            <br>
                            En el material audiovisual, el supuesto conductor le indica a la policía que primero él fue agredido, "como que yo fuera tu marido", le señala. Mientras ella continúa viendo un teléfono.
                            <br>
                            <br>
                            Por su parte, la agente alega que el piloto le estaba gritando, "su trabajo es..." afirma él, mientras ella comienza a gritar "No señor" y posteriormente le grita "cállese" y le tira el teléfono celular. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.soy502.com/sites/default/files/styles/full_node/public/2023/Mayo/12/izabal_video_mujer_carretera_pavimento.jpeg" class="card-img-top" alt="Noticia 2">
                    <div class="card-body">
                        <h5 class="card-title">¡Lo destruyó! Mujer caminó por carretera recién pavimentado en Puerto Barrios</h5>
                        <p class="card-text">A través de redes sociales se dio a conocer el caso de una mujer que caminó sobre un tramo carretero recién pavimentado en Izabal.
                            <br>
                            <br>
                            En las imágenes se observa que la mujer deja sus huellas sobre el pavimento fresco. Al llegar al otro lado de la calle, se calzó sus sandalias y continuó caminando.
                            <br>
                            <br>
                            Para conocer más sobre la situación, Soy502 se puso en contacto con la Policía Municipal de Tránsito (PMT) de Puerto Barrios, Izabal, quienes confirmaron que el incidente ocurrió el 10 de mayo. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- APARTADO DE VIDEOS -->
    <div class="container mt-5">
        <h2 class="text-center text-primary-emphasis">Videos</h2>
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/mlh1U8oGGqE" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/FAkPKFIrweM" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    </div>
    </body>
    </html>

@endsection
