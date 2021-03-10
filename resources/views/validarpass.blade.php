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
            ##error{
                color:#F00;
                font-family: Arial, Helvetica, sans-serif;
            }
            #correcto{
                width: 20px;
            }
        </style>
        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script>
            $(document).ready(function() {
                $("#pass2").keyup(function(){
                    var txtpass1 = $("#pass1").val();
                    var txtpass2 = $("#pass2").val();

                    if(txtpass1 == txtpass2){
                        $("#spass2").text("Correcto");
                        $("#spass2").css({ "border": "1px solid #0f0" }).fadeIn(2000);
                    }
                    else{
                        $("#spass2").text("Incorrecto");
                        $("#spass2").css({ "border": "1px solid #f00" }).fadeIn(2000);
                    }
                });
                $("#pass1").keyup(function(){
                    var pass=$("#pass1").val();             //recibe variable de input
                    var conteo=$("#pass1").val().length;    //cuenta la cedena string / contraseña
                    var cadena=pass.split("");      //divide la cadena string / contraseña
                    var cont=0;                     //cuenta lo caracteres especiales
                    var let_a=0;                    //cuenta las letras minusculas
                    var let_b=0;                    //cuenta las letras mayusculas
                    var let_c=0;                    //cuenta los numeros 
                    var let_d=0;                    //cuenta caracteres especiales 
                    if (conteo>3){
                        if (cadena[0].search(/[A-Z]/g)+1 >0) {
                            let_a=0;
                            let_b=0;
                            let_c=0;
                            let_d=0;
                            for(var i=0; i<cadena.length; i++){
                                var letra=cadena[i];
                                if(letra.search(/[a-z]/g)+1){let_a=let_a+1}
                                else{
                                    if(letra.search(/[A-Z]/g)+1){let_b=let_b+1}
                                    else{
                                        if(letra.search(/[0-9]/g)+1){let_c=let_c+1}
                                        else{
                                            if(letra.search(/['@#-._']/g)+1){let_d=let_d+1;}     
                                            else{cont=cont+1;}                                  
                                        }
                                    }
                                }
                            }
                            if (conteo>=8) {
                                $("#nivel").css({"color":"#FFF", "background-color":"#0D8E1A"});
                                $("#nivel").text("Segura");
                            }else{
                                if (conteo>=6) {
                                    $("#nivel").css({"color":"#FFF", "background-color":"#EFDD0F"});
                                    $("#nivel").text("Pocosegura");
                                }else{
                                    $("#nivel").css({"color":"#FFF", "background-color":"#FF0"});
                                    $("#nivel").text("Insegura");
                                }
                            }
                            if(let_a <1 || let_b<1 || let_c<1 || let_d<1){
                                if(let_a<1){let_a="•Una letra minuscula";}else{let_a=" ";}
                                if(let_b<1){let_b="•Una letra mayuscula";}else{let_b=" ";}
                                if(let_c<1){let_c="•Un número";}else{let_c=" ";}         
                                if(let_d<1){let_d="•Un caracter: @ . - # _";}else{let_d=" ";}
                                $("#error").text("La contraseña debe contener minimo: " +let_a+let_b+let_c+let_d);
                            }else{  
                                $("#error").text(" ");
                            }
                            if (cont>0) {
                                $("#error").text("La contraseña solo debe contener letras, números y caracteres @ - . # _");
                                $("#pass1").css({"color":"#F00", "border": "solid 1px #F00"});
                                $("#nivel").text(" ");
                            }else{
                                $("#pass1").css({"color":"#000", "border": "solid 1px #000"});
                            }
                        }   
                        else{
                            $("#pass1").css({"color": "#F00", "border": "solid 1px #F00"});
                            $("#nivel").css({"border-style":"none"});
                            $("#nivel").text(" ");
                            $("#error").text("El primer caracter debe ser una letra Mayuscula ");
                        }
                    }else{
                        $("#pass1").css({"color": "#000", "border" :"solid 1px #000"});
                        $("#nivel").text(" ");
                        $("#error").text(" ");
                    }
                });
            });
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Comprobar</h2>
                    <hr>

                    <center>
                        Contraseña:<input type="text" id="pass1">
                        <b id="nivel"></b><br>
                        <b id="error"></b><br>
                        confirmación: <input type="text" id="pass2">
                        <span id="spass2" class="spass2">
                    </center>
                    
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>