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
            #correcto{
                width: 20px;
            }
            .links{
                margin-top: 20px;
            }
        </style>
        <script type="text/javascript">
            function evaluar(){
                var pass1=document.getElementById("pass1").value;
                var pass2=document.getElementById("pass2").value;
                if (pass1==pass2){
                    alert("correcto");
                }else{
                    alert("incorrecto");
                }
            }
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Evaluar</h2>
                    <hr>

                    Contraseña: <input type="text" id="pass1" onkeyup="cantidad1(this);">
                    <b id="cant">__</b>
                    <b id="seg"></b><br>
                    Confirmación <input type="text" id="pass2" onkeyup="cantidad2();">
                    <img id="correcto" src="{{asset('img/paloma.png')}}"><br>
                    <button onclick="evaluar();">Evaluar</button>

                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
    <script>
    document.getElementById("correcto").style.visibility ="hidden";
        function cantidad1(obj){
            var conteo= obj.value.length;
            document.getElementById("cant").innerHTML=conteo;
            obj.preventDefault()
            if (conteo>=8) {
                document.getElementById("pass1").style.cssText ='color: #000000; border: solid 2px #000000';
                document.getElementById("seg").innerHTML="segura";
            }else{
                if (conteo>=6) {
                    document.getElementById("pass1").style.cssText ='color: #E36B2C; border: solid 2px #E36B2C';
                    document.getElementById("seg").innerHTML="Intermedio";
                }else{
                    document.getElementById("pass1").style.cssText ='color: #FF0000; border: solid 2px #FF0000';
                    document.getElementById("seg").innerHTML="Insegura";
                }
            }
        }
        function cantidad2(){
            var pass1=document.getElementById("pass1").value;
            var pass2=document.getElementById("pass2").value;

            if (pass1==pass2){
                document.getElementById("correcto").style.visibility ="visible";
            }else{
                document.getElementById("correcto").style.visibility ="hidden";
            }
        }
    </script>
</html>
