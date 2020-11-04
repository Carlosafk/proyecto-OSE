@extends('layouts.menu')
@section('menu')
<div class="container-fluid">
            <!--<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"  class="active"><a href="admin.php">Convenios</a></li>
            </ul>-->
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
                        <li><a href="{{route('ListaConvenio.index')}}"> listado de Convenios</a></li>
                        <li class="active">Lista de Empresas</a></li>
                    </ol>
                </div>
            </div>
        </div>
              <div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de Empresas</h2>
            <br><div>
            <input type="text" name="text" id="buscemp" class="form-control" placeholder="Ingrese el nombre del Convenio a buscar" aria-label="buscar" >
            </div>
 <div style="width:100%; height:80%; overflow: scroll;">
              <table class="table" id="tablaEMP">
                  <thead>
                    <tr>
                      <th scope="col">Empresa</th>
                      <th scope="col">Telefono</th>  
                      <th scope="col">Correo de la Empresa</th>                    
                      <th scope="col">Nombre del contacto</th>
                      <th scope="col">Telefono del contacto</th>
                      <th scope="col">Celular del contacto</th>
                      <th scope="col">Correo del contacto</th>
                      <th scope="col">Convenio Realizado</th>
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($variable as $recorrido) 

                      <tr>
                        <td>{{$recorrido->empresa->n_empresa}}</td>
                        <td>{{$recorrido->empresa->tel}}</td>
                        <td>{{$recorrido->empresa->corr}}</td>
                        <td>{{$recorrido->contacto->n_cont}}</td>
                        <td>{{$recorrido->contacto->tel_cont}}</td>
                        <td>{{$recorrido->contacto->cel_cont}}</td>
                        <td>{{$recorrido->contacto->corr_cont}}</td>
                        <td>{{$recorrido->convenio->n_convenio}}</td>

                        
                      </tr>
                      @endforeach
              </tbody>    
              </div>
            </div>
               </table>
<script>
  window.addEventListener("load",function(){
    document.getElementById("buscemp").addEventListener("keyup",function(){
      fetch(`/OSEGestordeconvenios/BuscarEmpresas?buscemp=${document.getElementById("buscemp").value}`,{method:'get',headers:{'X-CSRF-Token': $('meta[name="_token"]').attr('content') }})
      .then(response=>response.text())
      .then(html=>{
        document.getElementById("tablaEMP").innerHTML=html
      })
    })
  })
</script>
@endsection