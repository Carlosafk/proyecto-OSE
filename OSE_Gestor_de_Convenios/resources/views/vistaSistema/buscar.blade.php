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
                              
                            </a>
                        </button>
                          </td>
                        <td>
                          <button type="submit" class='btn btn-success' onclick="return confirm('Seguro que desea actualizar el convenio: {{ $recorrido->convenio->n_convenio}}')">
                            <a href="{{route('ActualizarConvenio.edit', $recorrido->id_empresa)}}">
                            
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
