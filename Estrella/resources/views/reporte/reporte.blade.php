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
                                                  <h4 class="modal-title">Reporte Total de ingresos por día</h4>
                                                
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
                                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cierre">Realizar Cierre del día</button>                                                  
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReportetotalTotal-->                                                                         
                                         <!--modalCierre-->   
                                          <div class="modal fade" id="cierre" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Cierre del día</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/cierre_dia'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_cierre" step="1" min="1900-01-01" max="2100-12-31" id="fe" required />
                                                      </div><br>

                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                            <select class="form-control selc-reg" id="id_cierreDes" name="cierre_descri" required>
                                                                <option id="" disabled selected value="seleccione">Seleccione...</option>
                                                                                                                               
                                                                 <option value="Lunes">Lunes</option>
                                                                 <option value="Martes">Martes</option>
                                                                 <option value="Miércoles">Miércoles</option>
                                                                 <option value="Jueves">Jueves</option>
                                                                 <option value="Viernes">Viernes</option>
                                                                 <option value="Sábado">Sábado</option>
                                                                 <option value="Domingo">Domingo</option>
                                                             
                                                                        
                                                            </select><br>
                                                       </div>                                                       
                                                                                                                                                                 
                                                                                                                                             
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="nuevo_cie">Nuevo</button>
                                                <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                                                  
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                          <!--endmodalcierre-->

                                        <!--modalCompras-->
                                          <div class="modal fade" id="reporte_costo" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte de Gastos</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_costo'))}}                  
                                                    
                                                      
                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteCos" step="1" min="1900-01-01" max="2100-12-31" id="reporte_cos" required />
                                                      </div><br>
                                                            
                                                                                                                                                
                                                      <div id="cost_rep"></div>
                                                {{Form::close()}}

                                                {{Form::open(array('url' => 'reporte/lista_costo'))}} 
                                                        <table class='table table-bordered table-striped table-hover table-responsive tbl-fecio' style="margin-top: 100px">
                                                          
                                                          <thead class="col-tab">
                                                            <td>Descripción</td>
                                                            <td>Cantidad</td>
                                                            <td>Precio</td>
                                                          </thead>
                                                          <tbody id="list">

                                                          @foreach ($getproductos as $result)
                                                            <tr>
      
                                                              <td>{{ $result->descripcion }}</td>
                                                              <td>{{ $result->cantidad }}</td>
                                                              <td>{{ $result->precio }}</td>

                                                            </tr> 
                                                          @endforeach  
                                                           
                                                          </tbody>
                                                        </table><br/>                                                      
                                                {{Form::close()}}                                                             
                                                                                                                                             
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                



                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReportetotalTotal-->                                                                         

                                        <!--modalSemana-->
                                          <div class="modal fade" id="semanal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte Semanal</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/reporte_semana'))}}                  
                                                    <br><br>

                                                      <label>Ingreso Semanal actual:<label style="margin-left: 15px">{{$suma_sem}}</label></label>

                                                        <table class='table table-bordered table-striped table-hover table-responsive tbl-fecio' style="margin-top: 100px">
                                                          
                                                          <thead class="col-tab">
                                                            <td>Fecha</td>
                                                            <td>Día</td>
                                                            <td>Total</td>
                                                          </thead>
                                                          <tbody id="sem_rep">
                                                          @foreach ($get_descr as $result)
                                                            <tr>
      
                                                              <td>{{ $result->fecha }}</td>
                                                              <td>{{ $result->descripcion }}</td>
                                                              <td>{{ $result->total }}</td>

                                                            </tr> 
                                                          @endforeach 
                                                          </tbody>
                                                        </table><br/>
                                                                                                  
                                                                                                                                                                                                                        
                                                                                                                                             
                                                </div>
                                                <div class="modal-footer">
                                                   <a href="/reporte"><button type="button" class="btn btn-default" data-toggle="modal" data-target="">Actualizar</button></a>
                                                   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cierre_se">Realizar Cierre de la semana</button>

                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}

                                       <!--cierresemana-->
                                          <div class="modal fade" id="cierre_se" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Reporte Semanal</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'reporte/sum_sema'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_reporteSem" step="1" min="1900-01-01" max="2100-12-31" id="reporte_se" required />
                                                      </div><br>                                                      
                                                       
                                                                                                                                                                                                                        
                                                                                                                                             
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="nuevo_cieS">Nuevo</button>
                                                <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                            <!--endcierresemana-->                                                
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalReporteSemana-->                                                                                                                  


                                        <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            
                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_bebida"><i class="glyphicon glyphicon-glass"></i> <br />Bebidas</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_comida"><i class="glyphicon glyphicon-cutlery"></i> <br />Comestibles</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_billar"><i class="glyphicon glyphicon-record"></i> <br />Billar</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_pozo"><i class="glyphicon glyphicon-briefcase"></i> <br />Pozo</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_total"><i class="glyphicon glyphicon-usd"></i> <br />Total Ingreso por día</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#semanal"><i class="glyphicon glyphicon-usd"></i> <br />Ingreso Semanal</a></li>

                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#reporte_costo"><i class="glyphicon glyphicon-shopping-cart"></i> <br />Costo de compras </a></li>

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
  <script src="{{asset('js/reporte_costo.js')}}"></script>
  <!--<script src="{{asset('js/reporte_semana.js')}}"></script>  -->
  <script src="{{asset('js/list_compra.js')}}"></script>
  <script src="{{asset('js/cierre_dia.js')}}"></script>
  <script src="{{asset('js/nuevo_cierre.js')}}"></script>
  <script src="{{asset('js/cierre_sem.js')}}"></script> 
  <script src="{{asset('js/nuevo_ciesem.js')}}"></script> 


@stop