@extends('Plantilla.create_plantilla')

@section('contenido')

    <form action="{{url('/empleados')}}" METHOD="post" enctype="multipart/form-data">
        {{@csrf_field()}}
        <label for="Titulo">

            {{'Titulo'}}
            <br>
            <input type="text" name="Titulo" value=""><br>
        </label><br>


        <labe for="Descripcion" >
            {{'Descripcion'}}
            <br>
            <input type="text" name="Descripcion" value=""><br>
        </labe><br>


        <labe for="Fecha" >
            {{'Fecha'}}
            <br>
            <input type="date" name="Fecha" value=""><br>
        </labe><br>


        <labe for="Foto" >

            {{'Foto'}}
            <br>
            <input type="file" name="Foto" value=""><br>
        </labe><br>

        <br>
        <input type="submit" value="Agregar">
    </form>
    <br>

@endsection
