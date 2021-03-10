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
                margin-top: 20px;
            }
            #img1, #img2, #imgPro1, #imgPro2,#imgPro3{
                width: 60px;
                height: 60px;
            }

        </style>
        <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                var costo=0;
                $("#img1").hide();
                $("#img2").hide();
                $("#imgPro1").hide();
                $("#imgPro2").hide();
                $("#imgPro3").hide();
                $('#selectEmp').click(function(){
                   var claEmpleado= $('#selectEmp').val();
                    var nameEmp=$("#selectEmp option:selected").text();
                    if(claEmpleado=="0001"){

                        $('#titleEmp').text('****Detalles de Empleado****');
                        $('#claEm').text('Clave :' +claEmpleado);
                        $('#nomEm').text('Nombre :'+nameEmp  );
                        $("#img1").show();
                        $("#img2").hide();
                        $('#error1').text('');
                    }else
                    if(claEmpleado=="0002"){
                        $("#img1").hide();
                        $('#titleEmp').text('****Detalles de Empleado****');
                        $('#claEm').text('Clave :' +claEmpleado);
                        $('#nomEm').text('Nombre :'+nameEmp  );
                        $("#img2").show();
                        $('#error1').text('');
                    }else
                    if(claEmpleado==""){
                        $('#error1').css({"color": "#ff0110", "font-size": "20",});
                        $('#error1').text('Seleccione un empleado');
                        $('#titleEmp').text('');
                        $('#claEm').text('');
                        $('#nomEm').text('');
                        $("#img2").hide();
                        $("#img1").hide();
                    }
                });
                $('#selectPro').click(function(){
                    var claProducto=$('#selectPro').val();
                    var cant=$('#cantidad').val();
                    var nameProducto=$("#selectPro option:selected").text();
                    if(claProducto=="A001"){
                        costo=40;
                        $('#titlePro').text('****Detalles del Producto****');
                        $('#claPro').text('Clave: '+claProducto);
                        $('#nomPro').text('Nombre:'+nameProducto);
                        $('#cosPro').text('Costo: '+costo);
                        $('#promocion').text('En la compra de 4 o + producto un descuento del -3%');
                        $('#error2').text('');
                        $("#imgPro1").show();
                        $("#imgPro2").hide();
                        $("#imgPro3").hide();
                        if(cant!=""){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.03;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }
                    }else
                    if(claProducto=="A002"){
                        costo=45;
                        $('#titlePro').text('****Detalles del Producto****');
                        $('#claPro').text('Clave: '+claProducto);
                        $('#nomPro').text('Nombre:'+nameProducto);
                        $('#cosPro').text('Costo: '+costo);
                        $('#promocion').text('En la compra de 2 o + producto un descuento del -5%');
                        $('#error2').text('');
                        $("#imgPro1").hide();
                        $("#imgPro2").show();
                        $("#imgPro3").hide();
                        if(cant!=""){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.05;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }
                    }else
                    if(claProducto=="A003"){
                        costo=50;
                        $('#titlePro').text('****Detalles del Producto****');
                        $('#claPro').text('Clave: '+claProducto);
                        $('#nomPro').text('Nombre:'+nameProducto);
                        $('#cosPro').text('Costo: '+costo);
                        $('#promocion').text('En la compra de 3 o + producto un descuento del -7%');
                        $('#error2').text('');
                        $("#imgPro1").hide();
                        $("#imgPro2").hide();
                        $("#imgPro3").show();
                        if(cant!=""){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.07;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }
                    }else
                    if(claProducto==""){
                        $('#error2').css({"color": "#ff0110", "font-size": "20",});
                        $('#error2').text('Seleccione un producto');
                        $('#titlePro').text('');
                        $('#claPro').text('');
                        $('#nomPro').text('');
                        $('#cosPro').text('');
                        $('#promocion').text('');
                        $("#imgPro1").hide();
                        $("#imgPro2").hide();
                        $("#imgPro3").hide();
                    }
                });
                    $("#cantidad").keydown(function(obj) {
                    if(obj.shiftKey)
                        obj.preventDefault();
        
                    if (obj.keyCode != 46 && obj.keyCode != 8 && obj.keyCode != 37 && obj.keyCode != 39) 
                    if($(this).val().length >= 11)
                    obj.preventDefault();
  
                    if (obj.keyCode < 48 || obj.keyCode > 57)
                     if (obj.keyCode < 96 || obj.keyCode > 105)
                    
                 if(obj.keyCode != 46 && obj.keyCode != 8 && obj.keyCode != 37 && obj.keyCode != 39)
                     obj.preventDefault();
                });
                $('#cantidad').keyup(function() {
                    var cant=$('#cantidad').val();
                    var pro=$('#selectPro').val();
                    var emp=$('#selectEmp').val();
                     if(cant==""){
                        $('#error3').text('Ingrese una cantidad');
                        $('#error3').css({"color": "#ff0110", "font-size": "20",});
                     }else{
                        $('#error3').text(''); 
                        if(pro=="A001"){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.03;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }if(pro=="A002"){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.05;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }
                        if(pro=="A003"){
                            var total=costo*cant;
                            $("#subT").text('El sub total es:'+total);
                            var desc=total*.07;
                            var neto=total-desc;
                            $('#total').text('El total es:'+neto);
                        }
                       
                     }

                });
            });
        </script>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    <h2>Examen</h2>
                    <div class="row">
                        <div class="col-sm-4 mt-5 m-3">
                            <form action="" class="form-controller">
                                <h2>***Venta de productos***</h2>
                                
                                <select class="form-control mt-3" name="Empleados" id="selectEmp">
                                    <option value="">---Seleccione un empleado---</option>
                                    <option value="0001" id="op1">Eduardo Duarte</option>
                                    <option value="0002" id="op1">Moises Lopez G</option>
                                </select>
                                <select class="form-control mt-3" name="Productos" id="selectPro">
                                    <option value="">---Seleccione  un producto---</option>
                                    <option value="A001">Mayonesa Mccornick</option>
                                    <option value="A002">Coca Cola 3L.</option>
                                    <option value="A003">Aspirina Forte</option>
                                </select>
                                <input type="text" class="form-control mt-3" id="cantidad">
                                <div id="pago" class="mt-3">
                                    <p>***Total a pagar***</p>
                                    <hr>
                                    <p id="subT"></p>
                                    <hr>    
                                    <p id="total"></p>
                                </div>
                            </form>
                            <p id="error1"></p>
                            <p id="error2"></p>
                            <p id="error3"></p>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div id="Empleado">
                                <p id="titleEmp"></p>
                                <p id="claEm"></p>
                                <p id="nomEm"></p>  
                                <img src="https://previews.123rf.com/images/pandavector/pandavector1704/pandavector170406117/76645972-hombre-con-icono-de-barba-plana-%C3%8Dcono-de-avatar-%C3%BAnico.jpg" alt="" id="img1">
                                <img src="data:image/png;base64,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" alt="" id="img2">
                            </div>
                            <div id="productos">
                                <p id="titlePro"></p>
                                <p id="claPro"></p>
                                <p id="nomPro"></p>
                                <p id="cosPro"></p>
                                <p id="promocion"></p>
                                <img id="imgPro1"src="https://m.media-amazon.com/images/I/71S2uAOsJHL._AC_SY741_.jpg" alt="">
                                <img id="imgPro2"src="data:image/jpeg;base64,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" alt="">
                                <img id="imgPro3"src="data:image/jpeg;base64,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" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="links mt-5">    
                    <a href="{{route('inicio')}}">regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
