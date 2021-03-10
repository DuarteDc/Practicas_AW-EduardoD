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
            $(document).ready(function() {
                var arreglo=['Nombre1','Nombre2','Nombre3','Nombre4'];
                $('#random').click(function(){
                     var rand1=arreglo[(Math.random()*arreglo.length)|0];
                     var rand2=Math.floor((Math.random()*arreglo.length));
                     var dato=arreglo[rand2];

                     $('#contenido').html(rand1+ "\n"+rand2+ " : "+dato);
                });
                $('#arreglo').html(arreglo);
            });
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h1>Jquery</h1>
                    <hr>
                    <center>
                        <br><br>
                        <div id="arreglo">----------------------</div>
                        <hr><br>
                        <button id="random">Random</button>
                        <br><br>
                        <textarea id="contenido">Mostrar Random</textarea>
                        <br><br>
                    </center>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
