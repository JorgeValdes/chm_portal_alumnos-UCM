{{-- Restriccion de acceso - Leer comentario en layout.redirect--}}
@include('layout.redirect')

@extends('layout.master')

@section('title')
  <title>Perfil Secretaria</title>
@endsection

@section('styles')
  @include('layout.materialize')
@endsection

@section('body')
  @foreach ($secretaries as $secretary) {{-- Obtención de los datos de la secretaria --}}
    @if ($secretary->id == Auth::user()->id) 

      <div class="row">
        <div class="col s4">     
           <div class="card-panel z-depth-5"> <!--Rectángulo donde estará el título y el botón desplegable -->
              <?php $direccion_imagen = Auth::user()->foto ?>
              <div align="center">    
                @if (empty(Auth::user()->foto))  
                  <img src="/images/default.png") style="width:40%">
                @else
                  <img src="{{$secretary->foto}}") style="width:40%">
                @endif
              </div>
              <h4><i class="material-icons">person</i>&nbsp{{$secretary->nombres}}&nbsp{{$secretary->apellidos}}</h4> 
              
              <div class="divider"></div>
              <div class="section">
                <h5><b>RUT</b></h5>
                <p><b><i>&nbsp&nbsp{{$secretary->rut}}</i></b></p>
              </div>
           </div>
        </div>      
        <div class="col s8">            
           <div class="card-panel z-depth-5"> <!--Rectángulo donde estará el título y el botón desplegable -->
              <h4>Bienvenido, Secretario</h4>  
           </div>
           <ul class="collapsible"> <!--Collapsible de información-->
            <li>
              <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                &nbsp<b>Información Personal</b></h6> </div>
              <div class="collapsible-body">
                <span>
                  <div class="section">
                    <h7><b>Email</b></h7>
                    <p><i>&nbsp&nbsp{{$secretary->email}}</i></p>
                  </div> 
                </span>
              </div>
              <div class="collapsible-body">
                <span>
                    <div class="section">
                      <h7><b>Dirección</b></h7>
                      <p><i>&nbsp&nbsp{{$secretary->direccion_actual}}</i></p>
                    </div> 
                  </span>
              </div>
              <div class="collapsible-body">
                <span>
                  <div class="section">
                    <h7><b>Teléfono</b></h7>
                    <p><i>&nbsp&nbsp{{$secretary->telefono}}</i></p>
                  </div> 
                </span>
              </div>
              <div class="collapsible-body">
                <span>
                  <div class="section">
                    <h7><b>Celular</b></h7>
                    <p><i>&nbsp&nbsp{{$secretary->celular}}</i></p>
                  </div> 
                </span>
              </div>
            </li>
          </ul>

          <ul class="collapsible"> <!--Collapsible de información-->
            <li>
              <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                &nbsp<b>Información 2</b></h6> </div>
              <div class="collapsible-body">
                <span>
                  <div class="section">
                    <h7><b>Ejemplo título</b></h7>
                    <p><i>&nbsp&nbspInformación respectiva al ejemplo.</i></p>
                  </div> 
                </span>
              </div>
            </li>
          </ul>
        </div>      
      </div>

          
    <div class="row">
      <div class="col s12"> 
          <h5 class="left-align"><i class="material-icons">person</i><b>&nbspDatos Personales</b></h5>    
          <div class="card horizontal z-depth-1"> {{--Creacion de card superiro con datos de usuario--}}
              <div class="col s3 indigo" style="position: relative; top: 0px">
                  <h6 style = "color:white;"><b>Nombre:</b></h6>
                  <h6 style = "color:white;"><b>RUT:</b></h6>
                  <h6 style = "color:white;"><b>Email:</b></h6> 
                  <h6 style = "color:white;"><b>Teléfono:</b></h6>
                  <h6 style = "color:white;"><b>Celular:</b></h6>
              </div>
              <div class="col s9" style="position: relative; top: 0px"> 
                  <h6>&nbsp{{$secretary->nombres}}&nbsp{{$secretary->apellidos}}</h6> 
                  <h6>&nbsp{{$secretary->rut}}</h6>
                  <h6>&nbsp{{$secretary->email}}</h6>
                  <h6>&nbsp{{$secretary->telefono}}</h6>
                  <h6>&nbsp{{$secretary->celular}}</h6>
              </div>
              <div class="col s2">  
                  <div>    
                      @if (empty(Auth::user()->foto))  
                        <img src="/images/default.png" class="center-align" style="width:80%; position: relative; left: 47px; top: 2px">
                      @else
                        <img src="{{$secretary->foto}}" class="center-align" style="width:80%; position: relative; left: 47px; top: 2px">
                      @endif
                  </div>
              </div>
          </div>
          </div>
      </div>      


      <div class="row">
        <div class="col s6">     
          <div class="card-panel z-depth-1"> <!--Rectangulito donde estará el título y el botón desplegable -->
            <h5 class="left-align"><b>&nbspInformación nº1</b></h5> 
          </div>
        </div>      

        <div class="col s6">            
            <div class="card-panel z-depth-1"> <!--Rectangulito donde estará el título y el botón desplegable -->
              <h5 class="left-align"><b>&nbspInformación nº2</b></h5>
              <ul class="collapsible"> <!--Collapsible de información-->
                <li>
                  <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                    &nbsp<b>Información X</b></h6> </div>
                  <div class="collapsible-body">
                    <span>
                      <div class="section">
                        1
                      </div> 
                    </span>
                  </div>
                  <div class="collapsible-body">
                    <span>
                        <div class="section">
                          2
                        </div> 
                      </span>
                  </div>
                  <div class="collapsible-body">
                    <span>
                      3
                    </span>
                  </div>
                  <div class="collapsible-body">
                    <span>
                      <div class="section">
                        4
                      </div> 
                    </span>
                  </div>
                </li>
              </ul>
  
              <ul class="collapsible"> <!--Collapsible de información-->
                <li>
                  <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>
                    &nbsp<b>Información Y</b></h6> </div>
                  <div class="collapsible-body"> 
                    <span>
                      <div class="section">
                        <h7><b>Ejemplo título</b></h7>
                        <p><i>&nbsp&nbspInformación respectiva al ejemplo.</i></p>
                      </div> 
                    </span>
                  </div>
                </li>
              </ul>
            </div>
        </div>      
    </div>


    @endif
  @endforeach
@endsection

@section('scripts')
  <script src={{ asset('js/nav_scripts.js') }}></script>
@endsection
