@extends('layouts.admin')

@section ('cabezera')

	<ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">SALIR</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
 		</li>
    </ul>  
    <ul class="nav navbar-nav navbar-right">
        <li><a href="almacen">ALMACEN</a></li>
    </ul>    

    <ul class="nav navbar-nav navbar-right">
        <li><a href="reporte">REPORTE</a></li>
    </ul>                                                

    <ul class="nav navbar-nav navbar-right">
        <li><a href="contenido">INICIO</a></li>
    </ul> 
@stop

@section ('seccion')
            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        <!-- Nav tabs -->                                   


                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            
                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#almacen_bebida"><i class="fa fa-map-marker"></i> <br />Bebidas</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#almacen_comida"><i class="fa fa-map-marker"></i> <br />Comestibles</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#almacen_comida"><i class="fa fa-map-marker"></i> <br />Billar</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#almacen_comida"><i class="fa fa-map-marker"></i> <br />Pozo</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#almacen_comida"><i class="fa fa-map-marker"></i> <br />Total Ingreso </a></li>
 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
@stop