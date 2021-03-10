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
                
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

            <div class="content">
                <div class="title m-b-md">
                    Validar
                </div>
                <hr>

                <center>
                    <h4>Evaluar 1:</h4><br>
                    <input type="text" require pattern="[0-9\/]+">

                    <h4>Evaluar 2:</h4>
                    <input type="text" onkeyup="validar1(this);" id="press">

                    <h4>Evaluar 3:</h4>
                    <input type="text" onkeyup="validar2(this);" id="pass2">
                    <p id="mostrar"></p>
                    <p id="error"></p>

                </center>
                <div class="links">
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
        <script>
            function validar1(obj){
                var pass=obj.value;
                if(pass.search(/[a-z]/i)<0){
                    alert("Error la contraseña no contiene letras");
                }else{
                    alert("La contraseña contiene letras");
                }
            }   

            function validar2(obj){
                var pass=obj.value;
                var cadena=pass.split("");
                var cont=0;
                for(var i=0; i<cadena.length; i++){
                    document.getElementById("mostrar").innerHTML=cadena[i].search(/[a-z]/g);
                }
                if (pass.search(/[A-Z]/g)+1 >0) {
                    document.getElementById("pass2").style.cssText= 'color: #0F0; border: solid 1px #0F0;';
                    document.getElementById("error").innerHTML='La primera letra es una mayuscula!!'
                } else {
                    document.getElementById("pass2").style.cssText= 'color: #F00; border: solid 1px #F00;';
                    document.getElementById("error").innerHTML='el primer caracter debe ser una letra mayuscula!!'
                }
            }
        </script>
    </body>
</html>
