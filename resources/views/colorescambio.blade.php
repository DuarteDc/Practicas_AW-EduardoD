<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script  src= "{{asset('js/jquery-3.3.1.js')}}"></script>
        <script  src= "{{asset('js/jquery-ui.js')}}"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
        <script>
             $(function(){
                $('#mostrar2').click(function(){
                    var valor = $('#valor').val();
                    if(valor==1){
                        $('.porclase1').css({
                                "background-color": "#B40431",
                            });
                        $('#valor').val(2);
                    }
                    if(valor==2){
                        $('.porclase1').css({
                                "background-color": "#4B088A",
                            });
                        $('#valor').val(3);
                    }
                    if(valor==3){
                        $('.porclase1').css({
                                "background-color": "#FF4000",
                            });
                        $('#valor').val(4);
                    }
                    if(valor==4){
                        $('.porclase1').css({
                            "background-color": "#088A85",
                            });
                        $('#valor').val(5);
                    }
                    if(valor==5){
                        $('.porclase1').css({
                                "background-color": "#2E2EFE",
                            });
                        $('#valor').val(1);
                    }
                });
             });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                    <h2>Cambia el color</h2>
                    <div>
                        <div class= "porclase1">COLOR</div>
                        <button id="mostrar2">Presiona para cambiar</button>
                        <input type="hidden" id="valor" value="1">
                    </div>
            </div>
        </div>
    </body>
</html>
