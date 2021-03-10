Nombre: <input type="text" name="nombre"><br>
Ap. Paternp: <input type="text" name="app"><br>
Ap. Materno: <input type="text" name="apm"><br>

Usuarios:
    <select name="id_usuario" id="select_usuarios">
        <option value="0">-- Selecciona un Usuario --</option>
        @foreach ($usu as $usu)
            <option value="{{$usu->id_usuario}}">{{$usu->nombre}}</option>
        @endforeach
    </select>