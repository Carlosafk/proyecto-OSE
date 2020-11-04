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
