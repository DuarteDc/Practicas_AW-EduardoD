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
                console.log("Salida de informacion");
                $('#porid').html("<b>campo por id</b>");
                $('.porclase').html("<i>campo por clase</i>");
                $('span').text("por objeto tag|html");
                $('span#texto').text('<i>campo en especifico de un html</i>');
                //-----------------------------------------------------------
                $('#porid').css({
                    "position":"absolute",
                    "background-color": "#FFA07A ",
                    "font-size":"200%",
                    "height":"100px",
                    "width":"100px"
                });
                $("#calcular").click(function(e){
                    e.preventDefault();
                    var num1=$('#num1').val();
                    var num2=$('#num2').val();
                        var res=parseFloat(num1)+parseFloat(num2);
                        alert(res);
                        $('#calcular').html(res);
                });
                //------------------------------------------------
                num1=10;
                num2=100;
                for (x = 0; x < 10; x++) {
                    console.log(x+1+" dato");
                }
                if(num1 !=num2){
                    alert(num1+num2);
                }
            });
            //------------------------------------------------
            $("#mostrar").click(function(){
                if($("#porid").is(":hidden")){
                    $("#porid").show(500);
                    $("#mostrar").html("ocultar");
                }else{
                    $("$porid").hide(500);
                    $("#mostrar").html("mostrar");
                }
            });
            //-------------------------------------------------------
            $("#mostrar2").click(function(){
                $("#porid").animate({
                    backgroundColor:"#08C",
                    color:"#fff"
                });
            });
            //--------------------------------------------------------------------------
            $("#mostrar3").click(function(){
                if($("#porid").position().left>0){
                    $("#porid").animate({left:'0px'},700);
                }else{
                    $("#porid").animate({left:'250px'},700);
                    $("#mostrar").html("izquierda");
                }
            });
            //-----------------------------------------------------------
            $("#btn1").click(function(){
                $("p").append("<i>---Texto extra---</i>");
            });
            $("#btn2").click(function(){
                $("ol").append("<li>Nueva lista</li>");
            });
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h1>Jquery</h1>
                    <hr>
                    <center>
                        <div id="porid">Campo-01</div>
                        <div class="porclase">Campo-02</div>
                        <span>Campo-03</span><br>
                        <span>Campo-04</span><br>
                        <span>Campo-05</span><br>
                        <div id="texto">Campo-06</div>

                        primer valor: <input type="text" id="num1"><br>
                        segundo valor: <input type="text" id="num2"><br>
                        <button id="calcular">Calcular</button><br><hr>
                        <button id="mostrar">Mostrar</button>
                        <p id="mostrar">mostrar 2</p>
                        <i id="mostrar">mostrar 3</i>
                        <hr>
                        <button id="mostrar2">Color</button>
                        <button id="mostrar3">Mover</button>
                        <br><hr>
                        <p>Tag de tipo de parrafo No. 1</p>
                        <p id="parrafo">Tag de tipo de parrafo|p No.2</p>
                            <ol>
                                <li>Lista - elemento 1</li>
                                <li>Lista - elemento 2</li>
                                <li>Lista - elemento 3</li>
                            </ol>
                        <button id="btn1">Adjuntar el texto al parrafo</button>
                        <button id="btn2">Adjuntar elemento a la lista</button>
                        <br><br><hr>
                    </center>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
