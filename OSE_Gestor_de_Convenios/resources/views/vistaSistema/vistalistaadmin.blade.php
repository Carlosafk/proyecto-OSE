 @extends('layouts.menu')
@section('menu')
     <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"  class="active"><a href="admin.php">Administradores</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="{{asset('assets/img/user01.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de los administradores, puedes desactivar la cuenta de cualquier administrador o eliminar los datos si no hay préstamos asociados a la cuenta
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="{{route('RegistroAdministrador.index')}}">Nuevo administrador</a></li>
                        <li class="active">listado de administradores</li>
                    </ol>
                </div>
            </div>
        </div>
            
       <div class="container-fluid" style="width:95%; height:70%; overflow: scroll;">
            <h2 class="text-center all-tittles" >Lista de administradores</h2>
            <!--tabla-->
            <div class="table-response " >
              <table class="table" id="tablaUSER">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">nombre</th>                      
                      <th scope="col">email</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($variableUser as $recorrido) 

                      <tr>
                        <td>{{$recorrido->id}}</td>
                        <td>{{$recorrido -> name}}</td>
                        <td>{{$recorrido -> email}}</td>
                        <td>
                          <div class=div-table-cell>
                            <form action="{{route('ListaAdministradores.destroy',$recorrido)}}" class="d-inline" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class='btn btn-danger' onclick="return confirm('Seguro que desea eliminar este usuario!!!')"><img src="{{asset('assets/img/basura.png')}}"style="width: 30px;height:25px;"></button>
                            </form>
                          </div>
                        </td>
                      </tr>
                      @endforeach
              </tbody>    
              </div>
               </table>  

        
</body>
</php>

@endsection