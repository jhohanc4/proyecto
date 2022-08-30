<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>AGREGAR ESTUDIANTE</h2>
    <?php  echo form_open_multipart('cliente/agregarbd'); ?> 
    <input type="text" name="nombres" placeholder="Ingrese su nombre" required>
    <input type="text" name="apellidopaterno" placeholder="Ingrese su apellido paterno" required>
    <input type="text" name="apellidomaterno" placeholder="Ingrese su apellido materno">
    <input type="text" name="direccion" placeholder="Ingrese su direccion"required>
    <input type="text" name="telefono" placeholder="Ingrese su numero de telefono" required>

    <button type="submit" class="btn btn-primary">AGREGAR CLIENTE</button>

    <?php form_close(); ?>
    </div>
  </div>
</div>