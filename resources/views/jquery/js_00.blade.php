<?php
    //echo $usu

    if(count($usu)==0){?>
     <script>
         $('#img').attr('src', 'img/shadow.png');
     </script>
    <?php}
    else{?>
        @foreach ($usu as $usu)
            ID:{{$usu->id_usuario}}<br>
            Nombre:{{$usu->nombre}}<br>
            Ap. Paterno:{{$usu->app}}<br>
            Ap. Materno:{{{$usu->apm}}}<br>
            E-mail:{{$usu->emal}}<br>
            Fecha de nacimiento: {{$usu->fn}}<br>
            <script>
                $('#img').attr('src', 'img/{{$usu->img}}');
            </script>
        @endforeach
    <?php } ?>