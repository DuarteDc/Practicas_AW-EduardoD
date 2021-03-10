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
            #error{
                color:#F00;
                font-family: Arial, Helvetica, sans-serif;
            }
            #correcto{
                width: 20px;
            }
        </style>
        
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Comprobar</h2>
                    <hr>

                    <center>
                        Contraseña:<input type="text" id="pass1" onkeyup="evaluar(this);">
                        <b id="nivel"></b><br>
                        <b id="error"></b><br>
                        confirmación: <input type="text" id="pass2" onkeyup="validarPass();">
                        <img id="correcto" src="{{asset('img/paloma.png')}}"><br>
                    </center>
                    
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
        <script>
         document.getElementById("correcto").style.visibility ="hidden"; 
            function evaluar(obj){
                var pass=obj.value;             //recibe variable de input
                var conteo=obj.value.length;    //cuenta la cedena string / contraseña
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
                                document.getElementById("nivel").style.cssText='color:#FFF; background-color:#0D8E1A;';
                                document.getElementById("nivel").innerHTML="Segura";
                            }else{
                                if (conteo>=6) {
                                    document.getElementById("nivel").style.cssText='color:#FFF; background-color:#EFDD0F;';
                                    document.getElementById("nivel").innerHTML="Pocosegura";
                                }else{
                                    document.getElementById("nivel").style.cssText='color:#FFF; background-color:#FF0;';
                                    document.getElementById("nivel").innerHTML="Insegura";
                                }
                            }
                            //Indica si existen letras mayusculas, minusculas y números
                            if(let_a <1 || let_b<1 || let_c<1 || let_d<1){
                                if(let_a<1){let_a="•Una letra minuscula <br>";}else{let_a=" ";}
                                if(let_b<1){let_b="•Una letra mayuscula <br>";}else{let_b=" ";}
                                if(let_c<1){let_c="•Un número <br>";}else{let_c=" ";}         
                                if(let_d<1){let_d="•Un caracter: @ . - # _<br>";}else{let_d=" ";}
                                document.getElementById("error").innerHTML="La contraseña debe contener minimo:<br>" +let_a+let_b+let_c+let_d;
                            }else{  
                                document.getElementById("error").innerHTML=" ";
                            }
                            //Indica si existen caracteres especiales
                            if (cont>0) {
                                document.getElementById("error").innerHTML="La contraseña solo debe contener letras, números y caracteres @ - . # _";
                                document.getElementById("pass1").style.cssText="color:#F00; border: solid 1px #F00;";
                                document.getElementById("nivel").innerHTML="";
                            }else{
                                document.getElementById("pass1").style.cssText="color:#000; border: solid 1px #000;";
                            }
                        }   
                        else{
                            document.getElementById("pass1").style.cssText="color: #F00; border: solid 1px #F00";
                            document.getElementById("nivel").style.cssText="border-style:none";
                            document.getElementById("nivel").innerHTML=" ";
                            document.getElementById("error").innerHTML="El primer caracter debe ser una letra Mayuscula ";
                        }
                }else{
                    document.getElementById("pass1").style.cssText="color: #000; border: solid 1px #000";
                    document.getElementById("nivel").innerHTML=" ";
                    document.getElementById("error").innerHTML=" ";
                }
            }
            function validarPass(){
                var pass1=document.getElementById("pass1").value;
                var pass2=document.getElementById("pass2").value;

                if(pass1==pass2){
                    document.getElementById("correcto").style.visibility ="visible";
                }else{
                    document.getElementById("correcto").style.visibility ="hidden"; 
                }
            }
        </script>
    </body>
</html>
