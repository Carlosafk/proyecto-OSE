@extends('layouts.menu')
@section('menu')

        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('assets/img/user01.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido,en esta sección se encuentra los convenios que estan por finalizar. 
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="{{route('RegistroConvenio.index')}}">Nuevo Convenio</a></li>
                        <li><a href="{{route('ListaConvenio.index')}}">Listado de Convenios</a></li>
                        <li class="active">listado de Convenios por Terminar</li>
                        <li><a href="{{route('ListaDeEmpresas.index')}}"> Lista de Empresas</a></li>
                    </ol>
                </div>
            </div>
        </div>
              <div class="container-fluid" >
            <h2 class="text-center all-tittles">Lista de convenios por terminar</h2>
            <br>
            <div style="width:100%; height:80%; overflow: scroll;">
              <table class="table">
                  <thead>
                    <tr>
                       <th scope="col">Empresa</th>
                      <th scope="col">Contacto</th> 
                      <th scope="col">Telefono del contacto</th> 
                      <th scope="col">Nombre del Convenio</th>                    
                      <th scope="col">Tipo del Convenio</th>
                      <th scope="col">Carrera(Maestria o Doctorado)</th>
                      <th scope="col">Modificar</th> 
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($collection as $recorrido=>$value) 

                      <tr>
                        <td>{{$value[0]->empresa->n_empresa}}</td>
                        <td>{{$value[0]->contacto->n_cont}}</td>
                        <td>{{$value[0]->contacto->tel_cont}}</td>
                        <td>{{$value[0]->convenio->n_convenio}}</td>
                        <td>{{$value[0]->convenio->tipo}}</td>
                        <td>{{$value[0]->carrera->carrera}}</td>
                       <td>
                          <button type="submit" class='btn btn-success' onclick="return confirm('Seguro que desea actualizar el convenio: {{ $value[0]->empresa->n_empresa}}')">
                            <a href="{{route('ActualizarConvenio.edit', $value[0]->empresa->id_empresa)}}">
                            <!--<i class = "zmdi zmdi-refresh-alt zmdi-hc-2x"> </i>-->
                            <img src="{{asset('assets/img/editar.png')}}"style="width: 30px;height:25px;">
                          </a>
                          </button>
                        </td>
                        <td>
                          
                          </button>
                        </td>
                        <td></td>
                      </tr>
                      @endforeach
              </tbody>
              </div>    
              </div>
               </table>
@endsection