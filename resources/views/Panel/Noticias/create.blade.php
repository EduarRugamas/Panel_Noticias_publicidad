<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

{{--    <script type="text/javascript" src="ckeditor_basic/ckeditor.js"></script>--}}
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>--}}
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/decoupled-document/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>

</head>
<body class="">

            <div class="container h-150, row justify-content-center h-100">
                <form action="{{url('/noticias')}}" METHOD="post" enctype="multipart/form-data">
                    {{@csrf_field()}}

                  <div class="form-group">
                    <label for="Titulo">

                        {{'Titulo'}}
                        <input class="form-control" type="text" name="Titulo" value=""><br>
                    </label>
                </div>

                    <div>
                        <label for="Descripcion" >
                            {{'Descripcion'}}
                            <br>

                            <di>
                                <textarea name="Descripcion" id="Descripcion" cols="40" rows="10" ></textarea>
                                <script>

                                    CKEDITOR.replace('Descripcion', {
                                        height: 200,
                                        width: 700,
                                        baseFloatZIndex: 10005
                                    });
                                    CKEDITOR.config.extraPlugins = ["justify", "colorbutton", "font"];
                                    // CKEDITOR.config.extraPlugins = ;
                                    // config.extraPlugins = "justify";
                                </script>
                            </di>

                        </label><br>
                    </div>



                <div class="form-group">
                    <label for="Fecha" >
                        {{'Fecha'}}
                        <br>
                        <input class="form-control" type="date" name="Fecha" value=""><br>
                    </label>
                </div>

                <div>
                    <label for="Foto" >

                        {{'Foto'}}
                        <br>
                        <input class="form-control-file" type="file" name="Foto" value=""><br>
                    </label>
                </div>

                    <br>
                    <input class="btn btn-primary" type="submit" value="Agregar">
                </form>
                <br>
            </div>

</body>
</html>
