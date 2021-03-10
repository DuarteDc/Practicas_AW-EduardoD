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
            .tema{
                font-family: cursive;;
                font-size: 30px;
                margin: 5px;
            }
            .links{
                margin-top: 20px;
            }   
        </style>
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Colores</h2>
                    <hr>
                    <p class="tema">Selecione un tema:</p>
                    <p class="tema" id="txtColor">color</p>
                    <div class="colores">
                    <select id="cbxColores">
                        <option value="null">--Selecione un color--</option>
                        <option value="rosa">Rosa</option>
                        <option value="verde">Verde</option>
                        <option value="azul">Azul</option>
                        <option value="naranja">Naranja</option>
                        <option value="morado">Morado</option>
                    </select>
                    <button onclick="color();">selecionar</button>
                </div>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
    <script>
        function color(){
            var col=document.getElementById("cbxColores").value;
            var colorF=document.getElementById("txtColor");
            if (col=="rosa") {
                colorF.innerHTML="Color"
                colorF.style.color=' #ff01dc ';
           }else
            if (col=="verde") {
                colorF.innerHTML="Color"
                colorF.style.color='#28D71F';
            }else 
            if (col=="azul"){
                colorF.innerHTML="Color"
                colorF.style.color='#048DFF';
            }else 
            if (col=="naranja"){
                colorF.innerHTML="Color"
                colorF.style.color='#FF8B00';
            }else
            if( col=="morado"){
                colorF.innerHTML="Color"
                colorF.style.color=' #9b01ff ';
            }else{
                colorF.style.color='#FF0C04';   
                colorF.innerHTML="*Por favor seleccione un color*";
            }
        }
    </script>
</html>
