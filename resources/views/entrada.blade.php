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
                $('#email').keyup(function () {
                    var valemail= $('#email').val();
                    if(valemail !=''){
                        //console.log(valemail);
                        $('#info').load('js00?email='+valemail);
                    }else{
                        $('#img').attr("src", "img/shadow.png");
                        console.log("----sin datos---");
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1>Jquery</h1>
                    <hr>
                    <center>
                        <form action="">
                            <table>
                                <tr>
                                    <td colspan="2">
                                        <img src="{{asset('img/shadow.png')}}" alt="imagen"
                                        id="img" width="140" height="140">
                                    </td>
                                </tr>
                                <tr>cen
                                    <td>Email:</td>
                                    <td><input type="text" name="email" id="email" class="email"></td>
                                </tr>
                                <tr>
                                    <td>Pass:</td>
                                    <td><input type="password" name="pass" id="pass" class="pass"></td>
                                </tr>
                                <tr>
                                    <td>Confirmar Pass:</td>
                                    <td><input type="password" name="pass2" id="pass2" class="pass2"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="ingresar" id="ingresar" class="ingresar" value="ingresar">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr><hr>
                                        <div id="info">-- -- -- -- -- -- -- -- -- --</div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
                <div class="links">    
                        <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
