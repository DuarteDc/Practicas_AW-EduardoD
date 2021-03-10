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
        <script type="text/javascript">
            console.log("hola");
            document.write("hola");


            if (confirm("Presiona aceptar o cancelar")){
                document.write("Si");
            }else{
                document.write("No");
            }
            /*
            var x;
            var nombre="Eduardo";
            var edad=20;
            var lista =["Eduardo", "Duarte", "Clemente"];
            var res1=2+5;
            var res2=edad-res1;
            var y=1;
                          
            for(x=0; x<=10; x++){
                console.log(x);
            }
            while(x<=10){
            console.log(x);
            x++;
            }
            do {
            console.log(x);
             x++;
            }while(x<=10);

             for(z in lista){
                console.log(lista[z]);
            }*/
            function cambio(){
                var a = "2020-a";
                document.getElementById("num1").value= a;
                document.getElementsByClassName("num2")[0].innerHTML="2020-b";
                document.getElementsByName("num3")[0].innerHTML="2020-c"
            }
            var dato=prompt("Indica un valor");
		    var a=parseInt(dato);
		    alert(a+10);
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Básico</h2>

                    <input type="text" id="num1"><br>
                    <div class="num2"></div><br>
                    <textarea name="num3"></textarea><br><br>

                    <button onclick="cambio()">Cambio de información</button>
                </div>
                <div class="links">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
