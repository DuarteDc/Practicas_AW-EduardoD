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
            .links{
                margin-top: 20px;
            }

        </style>
        <script type="text/javascript">
            var suma=function(){

                var num1=parseFloat(document.getElementById("n1").value);
                var num2=parseFloat(document.getElementById("n2").value);

                var res=num1+num2;
                    document.getElementById('resdata').innerHTML = res;
                return alert(res);
            }
            function otro (num1, num2){
                var res = num1+num2;
                resultado.call(this);
                return res;
            }
            function resultado(){
                var info ="DSM";
                document.getElementById('resdata').innerHTML=info;
                document.getElementsByClassName("ejemplo")[0].innerHTML=info;
                document.getElementsByName("txt")[0].innerHTML = info;
                document.getElementsByName("n2").value= "DSM"
            }

            var fecha1 = new Date();
            var fecha2 = String(fecha1);
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Campos</h2>
                    <hr>
                    Numero 1: <input type="text" id="n1"> &nbsp; &nbsp;
                    Numero 2: <input type="text" id="n2"> <br>
                    <input type="submit" value="Suma-1" onclick="suma();" id="sub">&nbsp; &nbsp;
                    <button onclick="suma();">Sumar-2</button>
                    <br><br>

                    <center>
                        <div id="resdata">RESULTADO-1</div><br>
                        <div class="ejemplo">RESULTADO-2 a</div><br>
                        <div class="ejemplo">RESULTADO-2 b</div><br>
                        <textarea name="txt" cols="50" rows="5">RESULTADO-3</textarea>
                        <p id="fecha">-- -- -- --</p>
                        
                    </center>

                    <h2 id="colores">Colores</h2>
                    <button onclick="document.getElementById('colores').style.color ='red'">Rojo</button>
                    <button onclick="document.getElementById('colores').style.border ='solid 1px #00FF00'">Verde</button>
                    <button onclick="document.getElementById('colores').style.cssText ='color: #0000FF; border: solid 1px #0000FF'">Azul</button>

                    <select id="comidas">
                        <option>Mango</option>
                        <option>Enchiladas</option>
                    </select>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
    <script>
        document.getElementById("fecha").innerHTML=fecha1;
        var elemento= document.createElement("option");
        var selector = document.getElementById("comidas");
        var objeto = document.getElementsByTagName("option")[0];
            selector.insertBefore(elemento,objeto)
            elemento.setAttribute('value','sopa');
            elemento.textContent = 'SOPA'
    </script>
</html>
