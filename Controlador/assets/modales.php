<div class="modal fade" id="ModalAddUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Usuario</h4>
      </div>
      <form action="index.php?Usuarios" class="form-signin" method="post" id="formulario_agregar">
        <div class="modal-body">
              <input type="hidden" name="insertarUsuario">
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre" required autofocus autocomplete="off" maxlength="125"><br>
              <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese el telefono" required autofocus autocomplete="off" maxlength="10"><br>
              <input type="text" id="correo" name="correo" class="form-control" placeholder="Ingrese el correo" required autofocus autocomplete="off"><br>
              
              <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Ingrese el Usuario" required autofocus autocomplete="off"><br>
              <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese la Contraseña" required><br>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="btnagregar">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalEditUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
      </div>
      <form action="index.php?Usuarios" class="form-signin" method="post" id="formulario_editar">
        <div class="modal-body">
              <input type="hidden" name="editarUsuario">
              <input type="hidden" id="id_usuario" name="id_usuario">
              <input type="text" id="edit_nombre" name="edit_nombre" class="form-control" placeholder="Ingrese el nombre" required autofocus autocomplete="off" maxlength="125"><br>
              <input type="text" id="edit_telefono" name="edit_telefono" class="form-control" placeholder="Ingrese el telefono" required autofocus autocomplete="off" maxlength="10"><br>
              <input type="text" id="edit_correo" name="edit_correo" class="form-control" placeholder="Ingrese el correo" required autofocus autocomplete="off"><br>
              
              <input type="text" id="edit_usuario" name="edit_usuario" class="form-control" placeholder="Ingrese el Usuario" required autofocus autocomplete="off"><br>
              <input type="password" id="edit_password" name="edit_password" class="form-control" placeholder="Ingrese la Contraseña" required><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="btneditar">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>