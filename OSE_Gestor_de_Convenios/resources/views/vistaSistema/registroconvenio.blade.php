@extends('layouts.menu')
@section('menu')
<div class="container-fluid">
            <!--<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"  class="active"><a href="admin.php"></a></li>
            </ul>-->
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('assets/img/user01.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido, en esta sección se registran los  nuevos Convenios en el sistema, recuerde llenar todos los campos del siguiente formulario para registrar un nuevo Convenio. 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Convenio</li>
                      <li><a href="{{route('ListaConvenio.index')}}">Listado de Convenios</a></li>
                      <li><a href="{{route('ListaDeEmpresas.index')}}">Lista de Empresas</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo Convenio</div>
                <form action="{{route('RegistroConvenio.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    {{ csrf_field() }}
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <label>Datos de la Empresa</label><br><br>
                            <div class="group-material">

                                <input type="text" class="material-control tooltips-general" name="n_empresa" placeholder="Nombre completo" required="" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de la Empresa</label>
                            </div>
                              <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="ubic" placeholder="Ubicacion" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe la ubicacion de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Ubicacion</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="dir" placeholder="Direccion" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccion de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Direccion</label>
                            </div>
                           <div class="group-material">
                                <input type="tel" class="material-control tooltips-general"  name="tel" placeholder="Telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el telefono de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono</label>
                           </div>
                           <div class="group-material">
                                <input type="email" class="material-control tooltips-general" name="corr" placeholder=Correo required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el correo de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                           </div>
                          <label>Datos del Contacto</label><br><br>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="n_cont" placeholder="Nombre del contacto" required="" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del Contacto</label>
                            </div>
                              <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="puesto" placeholder="puesto" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el puesto del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Puesto</label>
                            </div>
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" name="tel_cont" placeholder="telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccion del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono</label>
                            </div>
                           <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" name="cel_cont" placeholder="celular" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el celular de contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Celular</label>
                           </div>
                           <div class="group-material">
                                <input type="email" class="material-control tooltips-general" name="corr_cont" placeholder=Correo required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el correo de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                           </div>
                           <label>Datos del Convenio</label><br><br>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="n_convenio" placeholder="Nombre del convenio" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del Convenio</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  name="tipo" placeholder="Tipo de convenio" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el tipo de convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo de Convenio</label>
                            </div>
                              <div class="group-material">
                                <input type="date" class="material-control tooltips-general" name="fecha" placeholder="fecha de inicio" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="selecciona la fecha de inicio del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha de inicio</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="ind" placeholder="Si/No" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Convenio Indefinido</label>
                            </div>
                           <div class="group-material">
                                <input type="date" class="material-control tooltips-general" name="fecha_fin" placeholder="celular" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="selecciona la fecha de termino del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha final</label>
                          </div>
                            <label>Carrera(s) a que va dirigido el convenio</label><br><br>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"  name="carrera" placeholder="Tipo de convenio" required="" maxlength="270"  data-toggle="tooltip" data-placement="top" title="Escribe la carrera o carreras a que va diriido el convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Carrera(Maestria o Doctorado)</label>
                            </div>
                        
                            <div class="group-material">
                                Archivo pdf 
                                <br>
                                <input type="file" name="pdf" ><br><br>
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
       
    </div>
@endsection