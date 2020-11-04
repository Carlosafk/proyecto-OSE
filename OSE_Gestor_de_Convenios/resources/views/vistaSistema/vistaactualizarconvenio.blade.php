@extends('layouts.menu')
@section('menu')
  <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"  class="active"><a href="admin.php">Convenios</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('assets/img/user01.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de los convenios disponibles con los que cuenta la escuela 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="{{route('RegistroConvenio.index')}}">Nuevo Convenio</a></li>
                        <li><a href="{{route('ListaConvenio.index')}}">Lista de Convenio</a></li>
                        <li><a href="{{route('ElinimarConvenio.index')}}">Eliminar Convenio</a></li>
                        <li class="active">ModificarConvenio</a></li>
                    </ol>
                </div>
            </div>
        </div>
              <div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de convenios</h2>
            <div class="table-response ">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Empresa</th>
                      <th scope="col">Contacto</th>                      
                      <th scope="col">Convenio</th>
                      <th scope="col">Carrera(Maestria o Doctorado)</th>
                      <th scope="col">Modificar</th>
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($variable as $recorrido) 

                      <tr>
                        <td>{{$recorrido->empresa->n_empresa}}</td>
                        <td>{{$recorrido->contacto->n_cont}}</td>
                        <td>{{$recorrido->carrera->carrera}}</td>
                        <td>{{$recorrido->convenio->tipo}}</td>
                        <td><li href="{{route('ActualizarConvenio.edit', $recorrido->id_empresa)}}"></li>
                      </tr>
                      @endforeach
              </tbody>    
              </div>
               </table>
@endsection