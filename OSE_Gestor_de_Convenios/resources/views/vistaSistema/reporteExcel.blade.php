<!DOCTYPE html>
<html>
<head>
  <title> Reporte de Convenios</title>
</head>
<body>
 <div class="container-fluid">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Empresa</th>
                      <th scope="col">Contacto</th>  
                      <th scope="col">Nombre del Convenio</th>         
                      <th scope="col">Tipo del Convenio</th>
                      <th scope="col">Fecha de Inicio </th>
                      <th scope="col">Fecha de Termino</th>
                      <th scope="col">Convenio Indefinido</th>
                      <th scope="col">Carrera(Maestria o Doctorado)</th>
                      
                    </tr>
                  </thead>
             

              <tbody>
                    @foreach ($Registro as $recorrido) 

                      <tr>
                        <td>{{$recorrido->empresa->n_empresa}}</td>
                        <td>{{$recorrido->contacto->n_cont}}</td>
                        <td>{{$recorrido->convenio->n_convenio}}</td>
                        <td>{{$recorrido->convenio->tipo}}</td>
                        <td>{{$recorrido->convenio->fecha}}</td>
                        <td>{{$recorrido->convenio->fecha_fin}}</td>
                        <td>{{$recorrido->convenio->ind}}</td>
                        <td>{{$recorrido->carrera->carrera}}</td>
>
                      </tr>
                      @endforeach
              </tbody>    
               </table>
                             </div>


</body>
</html>
             