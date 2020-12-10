<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="ckeditor_standar/ckeditor.js"></script>
</head>
<body>
        <div>
            <form action="{{url('/panel')}}" METHOD="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                <label for="Titulo">

                    {{'Titulo'}}
                    <br>
                    <input type="text" name="Titulo" value=""><br>
                </label><br>

                <div class="page-wrapper box-content">
                    <labe for="Descripcion" >
                        {{'Descripcion'}}
                        <br>
                        <textarea name="Text" id="" cols="30" rows="10"></textarea>
{{--                        <input type="text" name="Descripcion" id="RichText"><br>--}}


                        <script>
                          CKEDITOR.replace('Text');
                        </script>
                    </labe><br>
                </div>




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
        </div>
</body>
</html>
