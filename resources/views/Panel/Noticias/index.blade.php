<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


@extends('Plantilla.index_plantila')

@section('tarjeta_')
    <div class="container">
        <div class="card-container">
{{--            <a href="{{ url('Form')}}">Agregar Noticia</a>--}}
            <div class="header">
                @foreach ($noticias as $item)
                <a href="#">
                    <img src="{{ asset('storage'.'/'.$item->Foto)}}" alt="" width="200">
                </a>
                
                <h4>{{$item->Titulo}}</h4>
            </div>
            <div class="description">
               
                <p>
                   
                     {{$item->Descripcion}}
                    

                </p>
                
                {{-- para agregar iconos para redes sociales--}}
                {{--            <div class="social">--}}
                {{--            </div>--}}

            </div>
            @endforeach
        </div>

        <div>
        <a class="btn btn-primary" href="{{ url('/noticias/create')}}">Agregar Noticia</a>
        </div>
    </div>
@endsection
