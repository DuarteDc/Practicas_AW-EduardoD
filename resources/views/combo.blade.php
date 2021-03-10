<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script>

        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h1>Jquery</h1>
                    <hr>
                    <center>
                        <form action="{{route('datos')}}" name="alumno" method="POST">
                            {{csrf_field()}}
                            
                            <table>
                                <tr>
                                    <td>Estados:</td>
                                    <td>
                                        <select name="id_estado" id="select_estado">
                                            <option value="0">-- Selecciona un Estado --</option>
                                            @foreach ($estados as $estado)
                                                <option value="{{$estado->id_estado}}">{{$estado->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Municipios:</td>
                                    <td>
                                        <select name="id_municipio" id="select_municipio">
                                            <option value="0">-- Selecciona un Estado Antes--</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div id="info">-- -- -- --</div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td colspan="2"><input type="submit" value="salvar"></td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#select_estado').on('change', function() {
                    var id_estado=$(this).val();    
                    if($.trim(id_estado)!='0'){
                        $.get('js02', {id_estado: id_estado}, function (municipios) {
                            $('#select_municipio').empty();
                            $('#select_municipio').append("<option value='0'>-- Seleccione Municipio --</option>");
                            $.each(municipios, function (id, nombre) {
                                $('#select_municipio').append("<option value='"+id+"'>"+nombre+"</option>");
                            });
                        })
                    }else{
                        $("#select_municipio").empty();
                        $("#select_municipio").append("<option value='0'>--Seleccione un estado antes--</option>");
                    }
                });
                //----------------------------
                $('#select_municipio').on('change', function () {
                    $('#info').html('');
                    var id_municipio=$(this).val();
                    
                    if(id_municipio > 0){
                        $('#info').load('js02b?id_municipio=' + id_municipio).css({"background": "#08C"});
                    }else{
                        $("#info").html('');
                    }
                });
            });
        </script>
    </body>
</html>
