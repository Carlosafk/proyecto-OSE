@extends('layouts.menu')
@section('menu')

 <div class="container-fluid">
           
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('assets/img/user01.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido, en esta sección se editan los datos erroneos del Convenio, debes de llenar todos los campos necesarios para el Convenio. 
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Actualizar Convenio</li>
                      <li><a href="{{route('ListaConvenio.index')}}">Listado de Convenios</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo Convenio</div>
                <form action="{{route('RegistroConvenio.update',$variable->id_empresa)}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method ('PUT')
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <label>Datos de la Empresa</label><br><br>
                            <div class="group-material">

                                <input value="{{$variable->n_empresa}}" type="text" class="material-control tooltips-general" name="n_empresa" placeholder="Nombre completo" required=""   data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre de la Empresa</label>
                            </div>
                              <div class="group-material">
                                <input type="text" value="{{$variable->ubic}}"class="material-control tooltips-general" name="ubic" placeholder="Ubicacion" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe la ubicacion de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Ubicacion</label>
                            </div>
                            <div class="group-material">
                                <input type="text" value="{{$variable->dir}}"class="material-control tooltips-general" name="dir" placeholder="Direccion" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccion de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Direccion</label>
                            </div>
                           <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" value="{{$variable->tel}}" name="tel" placeholder="Telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el telefono de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono</label>
                           </div>
                           <div class="group-material">
                                <input type="email" class="material-control tooltips-general"value="{{$variable->corr}}" name="corr" placeholder=Correo required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el correo de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                           </div>
                          <label>Datos del Contacto</label><br><br>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"value="{{$v_contacto->n_cont}}" name="n_cont" placeholder="Nombre del contacto" required=""  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del Contacto</label>
                            </div>
                              <div class="group-material">
                                <input type="text" value="{{$v_contacto->puesto}}" class="material-control tooltips-general" name="puesto" placeholder="puesto" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el puesto del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Puesto</label>
                            </div>
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" value="{{$v_contacto->tel_cont}}" name="tel_cont" placeholder="telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la direccion del contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Telefono</label>
                            </div>
                           <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" value="{{$v_contacto->cel_cont}}"name="cel_cont" placeholder="celular" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el celular de contacto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Celular</label>
                           </div>
                           <div class="group-material">
                                <input type="email" class="material-control tooltips-general"value="{{$v_contacto->corr_cont}}" name="corr_cont" placeholder=Correo required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe el correo de la empresa">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo</label>
                           </div>
                           <label>Datos del Convenio</label><br><br>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general"value="{{$v_convenio->n_convenio}}" name="n_convenio" placeholder="Nombre del convenio" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre del Convenio</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general"value="{{$v_convenio->tipo}}" name="tipo" placeholder="Tipo de convenio" required="" maxlength="70"  data-toggle="tooltip" data-placement="top" title="Escribe el tipo de convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Tipo de Convenio</label>
                            </div>
                              <div class="group-material">
                                <input type="date" class="material-control tooltips-general"value="{{$v_convenio->fecha}}"  name="fecha" placeholder="fecha de inicio" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="selecciona la fecha de inicio del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha de inicio</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" value="{{$v_convenio->ind}}"name="ind" placeholder="Si/No" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Indefinido</label>
                            </div>
                           <div class="group-material">
                                <input type="date" class="material-control tooltips-general"value="{{$v_convenio->fecha_fin}}" name="fecha_fin" placeholder="celular" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="selecciona la fecha de termino del convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha final</label>
                          </div>
                            <label>Carrera(s) a que va dirigido el convenio</label><br><br>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" value="{{$v_carrera->carrera}}" name="carrera" placeholder="Tipo de convenio" required="" maxlength="270"  data-toggle="tooltip" data-placement="top" title="Escribe la carrera o carreras a que va diriido el convenio">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Carrera(Maestria o Doctorado)</label>
                            </div>
                            <div class="group-material">
                                <input type="file" class="material-control tooltips-general"  name="pdf" placeholder="Tipo de convenio" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Seleccione el archivo a subir">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Archivo pdf</label>
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
</body>
</php>
    @endsection