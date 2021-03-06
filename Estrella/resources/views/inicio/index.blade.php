<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Estrellas del Poker</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="{{asset('assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

        <script src="{{asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                           <!-- <a class="navbar-brand" href="#home">
                                                
                                                <img src="{{asset('assets/images/logo.png')}}"/
                                            </a>-->
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            SALIR
                                                    </a>
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


                                            @yield('contenido')

                                        </div>

                                    </div>
                                </nav>
                            </div>  
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->





            <section id="home" class="home">
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="main_home_slider text-center">
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Estrellas del Poker</h1>
                                      
                                        </div>
                                    </div>
          
                                    <div class="single_home_slider">
                                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                            <h1>Estrellas del Poker</h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_service_area">
                                <div class="main_service_content">
                                    <div class="service_tabe">
                                        <!-- Nav tabs -->
                                        
                                        <!--modalCantina-->
                                          <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">
                                            
                                      
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Cantina</h4>
                                                
                                                </div>
                                                      <div class="form-group form-inline">
                                                        
                                                            <label>Bebidas y Otros</label>
                                                          
                                                            <select class="form-control selc-reg" id="" name="billar_des" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                <option data-toggle="modal" data-target="#registro_bebidas">Registrar Bebida
                                                                </option>

                                                                <option data-toggle="modal" data-target="#actualizar_bebidas">Actualizar Bebida
                                                                </option>
                                                                
                                                                <option data-toggle="modal" data-target="#venta_bebidas">Registrar Venta
                                                                </option>

                                                                        
                                                            </select>
                                                                                  

                                                          <label>Comestibles</label>
                                                            <select class="form-control selc-reg" id="" name="billar_precio" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                <option data-toggle="modal" data-target="#registro_comestible">Registrar Comestible</option>

                                                                <option data-toggle="modal" data-target="#actualizar_comestible">Actualizar Comestible</option>
                                                                
                                                                <option data-toggle="modal" data-target="#venta_comestible">Registrar Venta</option>
                                                                        
                                                            </select>                                                       
                                                      </div><br/>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalCantina--> 

                                        <!--modalBillar-->
                                          <div class="modal fade" id="billar" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Billar</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                                    {{Form::open(array('url' => 'store/Ingresobillar'))}}
                                                     
                                                      <div class="form-group form-inline">
                                                        
                                                            <label>Seleccione tipo de ficha</label>
                                                          
                                                            <select class="form-control selc-reg" id="bill" name="billar_des" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($billar as $Billar)
                                                                
                                                                <option value={{ $Billar->descripcion }}> {{ $Billar->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select>
                                                                                  

                                                          <label>Precio</label>
                                                            <select class="form-control selc-reg" id="precio_bi" name="billar_precio" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>
                                                               
                                                                        
                                                            </select>                                                       
                                                      </div><br/>

                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fecha_billar" id="fecha_bi" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                                       
                                                      <button style="" id="nuevo_bi" type="submit" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                      <!--<button style="margin-left: 25px" type="button" class="btn btn-default">Actualizar</button>-->
                                                    </form> 
                                                
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalBillar--> 

                                        <!--modalPozo-->
                                          <div class="modal fade" id="pozo" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              <!-- Modal content-->
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Registro del día</h4>
                                                
                                                </div>
                                                <div class="modal-body">
                                                    {{Form::open(array('url' => 'store/pozo'))}}
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Ingreso del Pozo</label>
                                                        <input type="text" class="form-control" name="pozo" id="pozo_" style="margin-left: 40px">
                                                      </div><br/>
                                                      <div class="form-group form-inline">
                                                        <label>Ingreso de Propina:</label>
                                                        <input type="text" class="form-control" name="propina" id="propina" style="margin-left: 20px">
                                                      </div>

                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" id="fecha_pz" name="fecha_pozo" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>
                                                      
                                                      <button style="" id="nuevo_pozo" type="submit" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    </form> 
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalPozo--> 
                                         
                                        <!--modalRegistroCompras-->
                                          <div class="modal fade" id="registro_compras" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Registro de Compras</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'store/compra'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                            <select class="form-control selc-reg" id="venta_bebi" name="compra_descri" required>
                                                                <option id="opt1" disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($bebidasYOts as $bebidas_otros)
                                                                
                                                                <option value={{ $bebidas_otros->descripcion }}> {{ $bebidas_otros->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select><br>
                                                       </div>         
                                                      <div class="form-group form-inline">
                                                        <label>Cantidad</label>
                                                        <input style="margin-left: 21px" type="text" class="form-control" name="compra_canti" id="cant_rb">
                                                      </div><br/>                 
                                                      <div class="form-group form-inline">
                                                        <label>Precio</label>
                                                        <input style="margin-left: 37px"type="text" class="form-control" name="compra_precio" id="precio_rb">
                                                      </div><br/>
                                                                                                       

                                                      <div class="form-group">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="compra_fecha" step="1" id="fecha_rb" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                            
                                                      <button style="margin-left: 25px" type="button" id="nuevo_Rbebida" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                      
                    

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalRegistroCompras--> 

                                        <!--modalRegistroBebidas-->
                                          <div class="modal fade" id="registro_bebidas" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Registro de Bebidas</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'store/BebidasYOtros'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                        <input  type="text" class="form-control" name="descri_bebida" id="des_rb">
                                                      </div><br/>
                                                                
                                                      <div class="form-group form-inline">
                                                        <label>Cantidad</label>
                                                        <input style="margin-left: 21px" type="text" class="form-control" name="cantidad_bebida" id="cant_rb">
                                                      </div><br/>                 
                                                      <div class="form-group form-inline">
                                                        <label>Precio</label>
                                                        <input style="margin-left: 37px"type="text" class="form-control" name="precio_bebida" id="precio_rb">
                                                      </div><br/>
                                                                                                       

                                                      <div class="form-group">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" name="fechaR_bebida" step="1" id="fecha_rb" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                            
                                                      <button style="margin-left: 25px" type="button" id="nuevo_Rbebida" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                      
                    

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalRegistroBebidas--> 

                                        <!--modalActualizacionBebidas-->
                                          <div class="modal fade" id="actualizar_bebidas" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Actualización de Bebidas</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'update/update_bebida'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                            <select class="form-control selc-reg" id="des_ab" name="act_bebida" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($bebidasYOts as $bebidas_otros)
                                                                
                                                                <option value={{ $bebidas_otros->descripcion }}> {{ $bebidas_otros->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select><br><br><br>
                                                      </div><br/>
                                                                
                                                      <div class="form-group form-inline">
                                                        <label>Cantidad</label>
                                                        <input style="margin-left: 21px" type="text" required class="form-control" name="Acantidad_bebida" id="cant_ab">
                                                        <!--<button class="btn-danger">Eliminar</button>-->
                                                      </div><br/>                 
                                                      <div class="form-group form-inline">
                                                        <label>Precio</label>
                                                        <input style="margin-left: 37px"type="text" required class="form-control" name="Aprecio_bebida" id="precio_ab">
                                                        <!--<button class="btn-danger">Eliminar</button>-->
                                                      </div><br/>
                                                      <div class="form-group">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" id="fecha_ab" name="fechaA_bebida" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                                      
                                                      <button style="margin-left: 25px" id="nuevo_ab" type="submit" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalActualizacionBebidas--> 

                                        <!--modalVentaBebidas-->
                                          <div class="modal fade" id="venta_bebidas" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Venta de Bebidas</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'store/ventaBebida'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        
                                                            <label>Seleccione Bebida</label>
                                                          
                                                            <select class="form-control selc-reg" id="venta_bebid" name="venta_bebida" required>
                                                                <option id="opt1" disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($bebidasYOts as $bebidas_otros)
                                                                
                                                                <option value={{ $bebidas_otros->descripcion }}> {{ $bebidas_otros->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select><br><br><br>
                                                                                  

                                                          <label>Cantidad</label>
                                                            <select style="margin-left: 63px" class="form-control selc-reg" id="cantidad_vb" name="ventaB_cantidad" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>
                                                                
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>                                                                
                                                               
                                                                        
                                                            </select><br><br><br>

                                                          <label>Precio</label>
                                                            <select style="margin-left: 79px" id="precio_b" class="form-control selc-reg"  name="ventaB_precio" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                {{--@foreach ($bebidasYOts as $precio)
                                                                
                                                                <option value={{ $precio->precio }}> {{ $precio->precio }} </option>
                                                               @endforeach--}}
                                                                        
                                                            </select>

                                                      </div><br/>

                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" id="fecha_vb" type="date" name="fechaventa_bebida" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                                    
                                                      <button style="" type="button" id="nuevo1" class="btn btn-default">Nuevo</button>


                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalVentaBebidas--> 

                                        <!--modalRegistroComestibles-->
                                          <div class="modal fade" id="registro_comestible" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Registro de Comestibles</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'store/comestibles'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                        <input  type="text" class="form-control"  name="descri_comida" id="des_rc">
                                                      </div><br/>
                                                                
                                                      <div class="form-group form-inline">
                                                        <label>Cantidad</label>
                                                        <input style="margin-left: 21px" type="text" class="form-control" name="cantidad_comida" id="can_rc">
                                                      </div><br/>                 
                                                      <div class="form-group form-inline">
                                                        <label>Precio</label>
                                                        <input style="margin-left: 37px"type="text" class="form-control" name="precio_comida" id="precio_rc">
                                                      </div><br/>
                                                                                                       

                                                      <div class="form-group">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" id="fecha_rc" type="date" name="fechaR_comida" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>
                                                     
                                                      <button style="" type="submit" id="nuevo_rc" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalRegistroComestibles--> 

                                        <!--modalActualizacionComestibles-->
                                          <div class="modal fade" id="actualizar_comestible" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Actualización de Comestibles</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'update/update_comida'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        <label>Descripción</label>
                                                            <select class="form-control selc-reg" id="des_ac" name="act_comida" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($comidas_ as $comida)
                                                                
                                                                <option value={{ $comida->descripcion }}> {{ $comida->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select><br><br><br> 
                                                      </div><br/>
                                                                
                                                      <div class="form-group form-inline">
                                                        <label>Cantidad</label>
                                                        <input style="margin-left: 21px" type="text" class="form-control" name="Acantidad_comida" required id="can_ac">
                                                        <!--<button class="btn-danger">Eliminar</button>-->
                                                      </div><br/>      

                                                      <div class="form-group form-inline">
                                                        <label>Precio</label>
                                                        <input style="margin-left: 37px"type="text" required class="form-control" name="Aprecio_comida" id="precio_ac">
                                                        <!--<button class="btn-danger">Eliminar</button>-->
                                                      </div><br/>

                                                      <div class="form-group">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" type="date" id="fecha_ac" name="fechaA_comida" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                                       
                                                      <button style="" type="submit" id="nuevo_ac" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalActualizacionComestibles--> 

                                        <!--modalVentaComestible-->
                                          <div class="modal fade" id="venta_comestible" role="dialog">
                                            <div class="modal-dialog">
                                            
                                              
                                              <div class="modal-content">
                                                <div class="modal-header">

                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Venta de Comestibles</h4>
                                                
                                                </div>
                                                <div class="modal-body">

                                             {{Form::open(array('url' => 'store/ventaComida'))}}                  
                                                    
                                                      <div class="form-group form-inline">
                                                        
                                                            <label>Seleccione Comestible</label>
                                                          
                                                            <select class="form-control selc-reg" id="venta_come" name="venta_comida" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                @foreach ($comidas_ as $comidas_venta)
                                                                
                                                                <option value={{ $comidas_venta->descripcion }}> {{ $comidas_venta->descripcion }} </option>
                                                               @endforeach
                                                                        
                                                            </select><br><br><br>
                                                                                  

                                                          <label>Cantidad</label>
                                                            <select style="margin-left: 63px" class="form-control selc-reg" id="cantidad_vc" name="ventaC_cantidad" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option> 
                                                                        
                                                            </select><br><br><br>

                                                          <label>Precio</label>
                                                            <select style="margin-left: 79px" class="form-control selc-reg" id="precio_vc" name="ventaC_precio" required>
                                                                <option disabled selected value="seleccione">Seleccione...</option>

                                                                {{--@foreach ($comidas_ as $comidas_precio)
                                                                
                                                                <option value={{ $comidas_precio->precio }}> {{ $comidas_precio->precio }} </option>
                                                               @endforeach--}}
                                                                        
                                                            </select>
                                                            
                                                            
                                                            
                                                      </div><br/>
                                                                
                                                      <div class="form-group form-inline">
                                                        <label>Fecha </label>
                                                        <input class="busc-ip" id="fecha_vc" type="date" name="fechaventa_comida" step="1" min="1900-01-01" max="2100-12-31" required />
                                                      </div><br>                                          

                                                      {{ session('flash_message') }}

                                                      <button style="" id="nuevo2" type="button" class="btn btn-default">Nuevo</button>

                                                      <button style="margin-left: 25px" type="submit" class="btn btn-default">Guardar</button>
                                                    
                                                                                                    
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                                {{Form::close()}}
                                              </div>
                                              
                                            </div>
                                          </div>
                                         <!--endmodalVentaComestible--> 

                                       <ul class="service_tabe_menu nav nav-tabs" role="tablist">
                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" class="active" data-toggle="modal" data-target="#myModal" ><i class="glyphicon glyphicon-cutlery"></i> <br />Cantina</a>
                                            </li>





                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#billar"><i class="glyphicon glyphicon-record"></i> <br />Billar</a></li>




                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#pozo"><i class="glyphicon glyphicon-briefcase"></i> <br />Pozo</a></li>








                                            <a href="#" aria-controls="webdesign" role="tab"><li role="presentation" data-toggle="modal" data-target="#registro_compras"><i class="glyphicon glyphicon-shopping-cart"></i> <br />Compra de productos</a><li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>













        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets/js/jquery.masonry.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>

        
        
        <script src="{{asset('assets/js/gmaps.min.js')}}"></script>


        <script>

                                            function showmap() {
                                                var mapOptions = {
                                                    zoom: 8,
                                                    scrollwheel: false,
                                                    center: new google.maps.LatLng(-34.397, 150.644),
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                            }
        </script>

        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('js/compra.js')}}"></script>
        <script src="{{asset('js/pozo.js')}}"></script>
        <script src="{{asset('js/ingreso_billar.js')}}"></script>
        <script src="{{asset('js/reg_bebidas.js')}}"></script>
        <script src="{{asset('js/reg_comestibles.js')}}"></script>
        <script src="{{asset('js/venta_bebidas.js')}}"></script>
        <script src="{{asset('js/venta_comida.js')}}"></script>
        <script src="{{asset('js/nuevo_vb.js')}}"></script>
        <script src="{{asset('js/nuevo_vc.js')}}"></script>
        <script src="{{asset('js/nuevo_rb.js')}}"></script>
        <script src="{{asset('js/nuevo_ab.js')}}"></script>
        <script src="{{asset('js/nuevo_rc.js')}}"></script>
        <script src="{{asset('js/nuevo_ac.js')}}"></script>
        <script src="{{asset('js/nuevo_billar.js')}}"></script>
        <script src="{{asset('js/nuevo_pozo.js')}}"></script>
        <script src="{{asset('js/nuevo_compra.js')}}"></script>
        <script src="{{asset('js/precio_beb.js')}}"></script>
        <script src="{{asset('js/precio_com.js')}}"></script>
        <script src="{{asset('js/actua_bebida.js')}}"></script>
        <script src="{{asset('js/actua_comida.js')}}"></script>
         <script src="{{asset('js/precio_billar.js')}}"></script>
    </body>
</html>
