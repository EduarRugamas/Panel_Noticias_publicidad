{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">--}}


@extends('Plantilla.index_plantila')

@section('tarjeta_')
    <div class="container">
        @foreach($noticias as $items)
        <div class="card-container">
{{--            <a href="{{ url('Form')}}">Agregar Noticia</a>--}}
                 {{$loop->iteration}}
            <div class="header">
                <a href="#">
                    <img src="images/luna.jpg" alt="" width="150" height="150">
                </a>
                <h4>{{$items-> Titulo}}</h4>
            </div>
            <div class="description">
                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Aperiam deserunt ea esse exercitationem
                    incidunt magni maxime nam nisi non odio perferendis, quae quam qui quibusdam ratione
                    recusandae sequi sit vel?

                </p>
                {{-- para agregar iconos para redes sociales--}}
                {{--            <div class="social">--}}
                {{--            </div>--}}

            </div>
        </div>
        @endforeach
        <div>
        <a class="btn btn-primary" href="{{ url('/noticias/create')}}">Agregar Noticia</a>
        </div>
    </div>
@endsection
