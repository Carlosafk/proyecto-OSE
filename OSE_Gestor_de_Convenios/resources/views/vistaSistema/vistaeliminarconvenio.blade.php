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
                    Bienvenido a la sección donde se encuentra el listado de los convenios cancelados con los que cuenta la escuela.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="{{route('RegistroConvenio.index')}}">Nuevo Convenio</a></li>
                        <li><a href="{{route('ListaConvenio.index')}}">Lista de Convenio</a></li>
                        <li><a href="{{route('ActualizarConvenio.index')}}">Actualizar Convenios</a></li>
                        <li class="active">Eliminar Convenio</li>
                        
                    </ol>
                </div>
            </div>
        </div>
<div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de convenios</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                    <div class="div-table-cell"></div>
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Contacto</div>
                    <div class="div-table-cell">Convenio</div>
                    <div class="div-table-cell">Carrera(Maestria o Doctorado)</div>
                    <div class="div-table-cell">Eliminar</div>
                    
                </div> 

                    <div class=div-table-row>
                   <div class=div-table-cell>
                     <form action='eliminar_conv.php' method='POST'>
                   <input  type='checkbox'  id='act' name='eli' value='$conv'></div>
                    <div class=div-table-cell></div>
                   <div class=div-table-cell> </div>
                   <div class=div-table-cell> </div>
                   <div class=div-table-cell> </div>
                    <div class=div-table-cell>
                     <input type='submit' class='btn btn-danger' name='elim' value='eliminar'>
                      </input> 
                    </div>
                    <div class=div-table-cell>
                    </form>
                   </div>
                  
                </div>
</div>                  
        </div>
@endsection