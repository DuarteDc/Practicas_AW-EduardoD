<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            .calcu{
                max-width: 319px;
                min-height: 410px;
                background-color: #610B21;
                margin:auto;
                overflow: hidden;
                border: solid 1px #000;
                margin-bottom: 20px;
            }
            .btn-numero{
                background-color: #000000;
                color:#fff;
                width: 80px;
                height: 80px;
                margin: -2px;
                border: none;
            }
            .btn-numero:hover{
                background-color: #2E2E2E;
            }
            .btn-operacion{
                background-color: #FF8000;
                width: 80px;
                height: 80px;
                margin: -2px;
                border: none;
                border: solid 1px #000;
            }
            .btn-operacion:hover{
                background-color: #FFBF00;
            }
            .dis{
                max-width: 314px;
                min-height:100px;
                font-size: 50px;
                font-family: sans-serif;
                background-color: #000;
                color:#fff;
                border: solid 2px #000;
            }
        </style>
        <script type="text/javascript">
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Calculadora</h2>
                </div>
                <div class="calcu">
                    <form id="calculadora" name="calc">	
                        <input type="" name="display" class="dis"> <br>
                        <input type="button" value="1" class="btn-numero" onclick="calc.display.value+='1'">
                        <input type="button" value="2" class="btn-numero" onclick="calc.display.value+='2'">
                        <input type="button" value="3" class="btn-numero" onclick="calc.display.value+='3'">
                        <input type="button" class="suma btn-operacion" value="+" onclick="calc.display.value+='+'"> <br>
                        <input type="button" value="4" class="btn-numero" onclick="calc.display.value+='4'">
                        <input type="button" value="5" class="btn-numero" onclick="calc.display.value+='5'">
                        <input type="button" value="6" class="btn-numero" onclick="calc.display.value+='6'">
                        <input type="button" class="resta btn-operacion" value="-" onclick="calc.display.value+='-'"> <br>
                        <input type="button" value="7" class="btn-numero" onclick="calc.display.value+='7'">
                        <input type="button" value="8" class="btn-numero" onclick="calc.display.value+='8'">
                        <input type="button" value="9" class="btn-numero" onclick="calc.display.value+='9'">
                        <input type="button" class="multiplicacion btn-operacion" value="x" onclick="calc.display.value+='*'"> <br>
                        <input type="button" class="limpiar btn-operacion" value="C" onclick="calc.display.value=''">
                        <input type="button" value="0" class="btn-numero" onclick="calc.display.value+='0'">
                        <input type="button" class="igual btn-operacion" value="=" onclick="calc.display.value=eval(calc.display.value)">
                        <input type="button" class="dividir btn-operacion" value="/" onclick="calc.display.value+='/'">
                    </form>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
