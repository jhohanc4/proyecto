<div class="container">   
  <div class="row">
    <div class="col-md-12">

        <h2>AGREGAR VEHICULO</h2>
    <?php  echo form_open_multipart('motorizado/agregarbd'); ?> 
    <input type="text" name="categoria" placeholder="categoria(1 veh 2 mot)" required>
    <input type="text" name="placa" placeholder="Ingrese la placa" required>
    <input type="text" name="marca" placeholder="Ingrese la marca">
    <input type="text" name="modelo" placeholder="Ingrese el modelo"required>
    <input type="text" name="color" placeholder="Ingrese el color" required>
    <input type="text" name="codigochasis" placeholder="Ingrese el codigo de chasis">
    <br>
    <button type="submit" class="btn btn-primary">AGREGAR VEHICULO</button>

    <?php form_close(); ?>
      

    

    
    </div>
  </div>
</div>