<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Lista de Doctores</h2>
    <!-- Botón que redirige a otra página -->
    <a href="/controlador/logout.php">
        <button>Iniciar sesion</button>
    </a><br><br><br>
    <table id="usuariosTable" border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>LastName</td>
                <td>Email</td>
                <td>Password</td>
                <td>Especialidad</td>
                <td>Cedula</td>
                <td>Consultorio</td>
                <td>acciones</td>
            </tr>
        </thead>
        <tbody>
            <!-- aquí se carga no se que js del servidor al usuario -->
        </tbody>
        <script>
            // Usar jQuery para cargar los usuarios en la tabla desde PHP
            $(document).ready(function(){
                $.ajax({
                    url: '/modelo/cargardoc.php',
                    type: 'GET',
                    success: function(response){
                        $('#usuariosTable tbody').html(response);
                    }
                });
            });
        </script>
    </table>

    <!-- Formulario de edicion de usuarios -->
    <div id="modalEditar" style="display:none;">
        <h3>Editar usuarios</h3>
        <form id="mostrarEditarDoc" action="">
            ID: <span id="editID"> </span> <br>
            Name: <input type="text" id="editName"><br>
            Lastname: <input type="text" id="editLastname"><br>
            Correo: <input type="text" id="editCorreo"><br>
            Password: <input type="text" id="editPassword"><br>
            Especialidad: <input type="text" id="editEspecialidad"><br>
            Cedula: <input type="text" id="editCedula"><br>
            Consultorio: <input type="text" id="editConsultorio"><br>
            <button type="button" onclick="guardarEdicion()">Guardar</button>
        </form>
    </div>

    <div id="modalEliminar" style="display:none;">
        <h3>Confirmar Eliminacion</h3>
        <p>Estas seguro que quieres eliminar al doctor</p>
        <button type="button" onclick="eliminarUsuario()">Eliminar</button>
    </div>

    <script>
        function mostrarEditarDoc(id, name, lastname, email, password, especialidad, cedula, consultorio) {
            document.getElementById('editID').innerText = id; // validar ID
            document.getElementById('editName').value = name;
            document.getElementById('editLastname').value = lastname;
            document.getElementById('editCorreo').value = email;
            document.getElementById('editPassword').value = password;
            document.getElementById('editEspecialidad').value = especialidad;
            document.getElementById('editCedula').value = cedula;
            document.getElementById('editConsultorio').value = consultorio;

            // Mostrar la ventana modal edicion
            document.getElementById('modalEditar').style.display = 'block';
        }

        function guardarEdicion() {
            var id = document.getElementById('editID').innerText

            var name = document.getElementById('editName').value
            var lastname = document.getElementById('editLastname').value
            var correo = document.getElementById('editCorreo').value
            var password = document.getElementById('editPassword').value
            var especialidad = document.getElementById('editEspecialidad').value
            var cedula = document.getElementById('editCedula').value
            var consultorio = document.getElementById('editConsultorio').value

            // Enviar los datos editados al server usando AJAX
            $.ajax({
                type: 'POST',
                url: 'guardar_edicion_usuarios.php',
                data: {
                    id,
                    name,
                    correo,
                    password,
                    especialidad,
                    cedula,
                    consultorio,
                },
                success: function(response){
                    alert('Usuario editado correctamente, creo');
                    document.getElementById('modalEditar').style.display = 'none';
                    // actualiza la lista
                    actualizarListaUsuarios();
                }
            })
        }
        function actualizarListaUsuarios(){
            //recargar lista despues de actualizar
            $.ajax({
                url: '/modelo/cargardoc.php',
                type: 'GET',
                success: function(response){   
                    $('#usuariosTable tbody').html(response);
                }
            });
        }
        // Funcion Para Eliminar A Los Usuarios wow
        function mostrarEliminarDoc(id) {
            document.getElementById('editID').innerText = id; // validar ID
            // Mostrar la ventana modal edicion
            document.getElementById('modalEliminar').style.display = 'block';
        }
        function eliminarUsuario() {
            var id = document.getElementById('editID').innerText
            // Enviar los datos editados al server usando AJAX
            $.ajax({
                type: 'POST',
                url: 'eliminar_usuario.php',
                data: {
                    id,
                },
                success: function(response){
                    alert('Usuario elimindo correctamente');
                    document.getElementById('modalEliminar').style.display = 'none';
                    // actualiza la lista
                    actualizarListaUsuarios();
                }
            })
        }
    </script>
</body>
</html>
