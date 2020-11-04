
@extends('layouts.menu')
@section('menu')

     <section class="full-reset text-center" style="padding: 40px 0;">

        @if(!$d->isEmpty())
           @foreach($fecha as $key=>$value) 
            
        <div class="alert alert-danger">
            <button type="button" class="Close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>X</button>Convenios por terminar: {{count($fecha)}}
            <br>
            <span>Precionar <a style="color:blue;" href="{{route('cnvterminar')}}">Aqui</a> para ir a la seccion de convenios por terminar</span>    
        </div> 
        @break
            @endforeach       
        @endif
        <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face zmdi-hc-1x" style="margin-top:20px"></i></div>
                <div class="tile-name all-tittles"><a href="{{route('ListaAdministradores.index')}}">administradores</a></div>
            <div class="tile-num full-reset">{{$cont}} </div>
            </article>

             <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book zmdi-hc-1x" style="margin-top:20px"></i></div>
                <div class="tile-name all-tittles"><a href="{{route('ListaConvenio.index')}}">Convenios</a></div>
                <div class="tile-num full-reset"> {{$cont2}}</div>
            </article>
           
             <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-balance zmdi-hc-1x" style="margin-top:20px"></i></div>
                <div class="tile-name all-tittles"><a href="{{route('ListaDeEmpresas.index')}}">Empresas</a></div>
                <div class="tile-num full-reset">{{$cont3}}</div>
            </article>

             <article class="tile">
                <div class="tile-icon full-reset"  ><form action="{{route('GenerarDoc')}}" method="GET"> 
                        <button class='' onclick="return confirm('Seguro que desea generar un reporte')" name="GenerarDoc" style="height: 30%; margin-top:20px; "><i class = "zmdi zmdi-download zmdi-hc-1x"> </i></button>
                     </form>
                </div>
                
                <div class="tile-num full-reset"><p style="font-size: 34px">Generar Reporte</p> 
                    </div>
            </article>
        </section>      
    @endsection