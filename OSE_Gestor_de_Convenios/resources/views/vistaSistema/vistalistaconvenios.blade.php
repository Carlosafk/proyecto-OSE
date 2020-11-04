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
                    Bienvenido, en esta sección se encuentra el listado de los convenios disponibles. 
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="{{route('RegistroConvenio.index')}}">Nuevo Convenio</a></li>
                        <li class="active">listado de Convenios</li>
                        <li><a href="{{route('ListaDeEmpresas.index')}}"> Lista de Empresas</a></li>
                    </ol>
                </div>
            </div>
        </div>
              <div class="container-fluid" >
            <h2 class="text-center all-tittles">Lista de convenios</h2>
            <br>
            <div>
            <input type="text" name="text" id="busc" class="form-control" placeholder="Ingrese el nombre del Convenio a buscar" aria-label="buscar" >
            </div>
            <br><hr>
            <div style="width:100%; height:80%; overflow: scroll;">
              <table class="table" id="tablaconv">
                  <thead>
                    <tr>
                      <th scope="col">Empresa</th>
                      <th scope="col">Contacto</th> 
                      <th scope="col">Telefono del contacto</th> 
                      <th scope="col">Nombre del Convenio</th>                    
                      <th scope="col">Tipo del Convenio</th>
                      <th scope="col">Carrera(Maestria o Doctorado)</th>
                      <th scope="col">PDF</th>
                      <th scope="col">Modificar</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($variable as $recorrido) 

                      <tr>
                        <td>{{$recorrido->empresa->n_empresa}}</td>
                        <td>{{$recorrido->contacto->n_cont}}</td>
                        <td>{{$recorrido->contacto->tel_cont}}</td>
                        <td>{{$recorrido->convenio->n_convenio}}</td>
                        <td>{{$recorrido->convenio->tipo}}</td>
                        <td>{{$recorrido->carrera->carrera}}</td>
                        <td><button class="btn btn-info">
                          <a href="{{ Storage::url($recorrido -> archPdf->ruta) }}" class="btn-descargar" target="_blank">
                            <img src="{{asset('assets/img/expediente.png')}}" style="width: 30px;height:30px;">
                              <!--<i class = "zmdi zmdi-file zmdi-hc-2x"></i>-->
                            </a>
                        </button>
                          </td>
                        <td>
                          <button type="submit" class='btn btn-success' onclick="return confirm('Seguro que desea actualizar el convenio: {{ $recorrido->convenio->n_convenio}}')">
                            <a href="{{route('ActualizarConvenio.edit', $recorrido->id_empresa)}}">
                            <!--<i class = "zmdi zmdi-refresh-alt zmdi-hc-2x"> </i>-->
                            <img src="{{asset('assets/img/editar.png')}}"style="width: 30px;height:25px;">
                          </a>
                          </button>
                        </td>
                        <td><form action="{{route('RegistroConvenio.destroy', $recorrido->id_empresa)}}" method="POST">
                            @csrf
                            @method('DELETE')
                             <button type="submit" class='btn btn-danger' onclick="return confirm('Seguro que desea eliminar el convenio: {{ $recorrido->convenio->n_convenio}}')"><img src="{{asset('assets/img/basura.png')}}"style="width: 30px;height:25px;"></button>
                        </form></td>
                      </tr>
                      @endforeach
              </tbody>
              </div>    
              </div>
               </table>
<script>
  window.addEventListener("load",function(){
    document.getElementById("busc").addEventListener("keyup",function(){
      fetch(`/OSEGestordeconvenios/BuscarConvenios?busc=${document.getElementById("busc").value}`,{method:'get',headers:{'X-CSRF-Token': $('meta[name="_token"]').attr('content') }})
      .then(response=>response.text())
      .then(html=>{
        document.getElementById("tablaconv").innerHTML=html
      })
    })
  })
</script>

@endsection