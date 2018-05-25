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

                                        <!--modalReporteBebida-->
                                          <div class="modal fade" id="reporte_bebida" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte de Bebidas y otros productos</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_bebida'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteB" step="1" min="1900-01-01" max="2100-12-31" id="reporte_beb" required />
                                                      </div><br>

                                                      <div id="beb_rep"></div>
                                                             
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReporteBebida-->                                         

                                        <!--modalReporteComida-->
                                          <div class="modal fade" id="reporte_comida" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte de Comestibles</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_comida'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteB" step="1" min="1900-01-01" max="2100-12-31" id="reporte_comi" required />
                                                      </div><br>

                                                      <div id="comi_rep"></div>
                                                             
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReporteComida-->                                                                         

                                        <!--modalReporteBillar-->
                                          <div class="modal fade" id="reporte_billar" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte de Billar</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_billar'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteB" step="1" min="1900-01-01" max="2100-12-31" id="reporte_bill" required />
                                                      </div><br>

                                                      <div id="billar_rep"></div>
                                                             
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReportetotalBillar-->                                                                         

                                        <!--modalReportePozo-->
                                          <div class="modal fade" id="reporte_pozo" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte de Pozo</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_Pozo'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteB" step="1" min="1900-01-01" max="2100-12-31" id="reporte_poz" required />
                                                      </div><br>

                                                      <div id="pozo_rep"></div>
                                                             
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReportetotalPozo-->                                                                         

                                        <!--modalReporteTotal-->
                                          <div class="modal fade" id="reporte_total" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte Total de ingresos</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_total'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteB" step="1" min="1900-01-01" max="2100-12-31" id="reporte_tot" required />
                                                      </div><br>

                                                      <div id="total_rep"></div>
                                                      
                                                                                                             
                                                                                                                                             
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReportetotalTotal-->                                                                         



                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            
                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_bebida"><i class="fa fa-map-marker"></i> <br />Bebidas</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_comida"><i class="fa fa-map-marker"></i> <br />Comestibles</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_billar"><i class="fa fa-map-marker"></i> <br />Billar</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_pozo"><i class="fa fa-map-marker"></i> <br />Pozo</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_total"><i class="fa fa-map-marker"></i> <br />Total Ingreso </a></li>
 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
@stop

@section('js')
	<script src="{{asset('js/reporte_beb.js')}}"></script>
  <script src="{{asset('js/reporte_comestible.js')}}"></script>
  <script src="{{asset('js/reporte_billar.js')}}"></script>
  <script src="{{asset('js/reporte_pozo.js')}}"></script>
  <script src="{{asset('js/reporte_total.js')}}"></script>  
@stop