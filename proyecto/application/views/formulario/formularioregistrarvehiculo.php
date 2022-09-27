<div class="container">   
  <div class="row">
    <div class="col-md-12">

        <h2>AGREGAR VEHICULO</h2>
    <?php  echo form_open_multipart('motorizado/agregarbd'); ?> 
    <div id="emailHelp" class="form-text">ingrese la categoria del automovil</div>
    <input type="text" class="form-control" name="categoria" placeholder="categoria" required>

    <div id="emailHelp" class="form-text">ingrese la placa del automovil</div>
    <input type="text" class="form-control" name="placa" placeholder="placa" required>

    <div id="emailHelp" class="form-text">ingrese la marca del automovil</div>
    <input type="text" class="form-control" name="marca" placeholder="marca">

    <div id="emailHelp" class="form-text">ingrese el modelo del automovil</div>
    <input type="text" class="form-control" name="modelo" placeholder="modelo"required>

    <div id="emailHelp" class="form-text">ingrese el color del automovil</div>
    <input type="text" class="form-control" name="color" placeholder="color" required>

    <div id="emailHelp" class="form-text">ingrese el codigo de chasis del automovil</div>
    <input type="text" class="form-control" name="codigochasis" placeholder="codigo de chasis">
    <br>
    
    <button type="submit" class="btn btn-primary">AGREGAR VEHICULO</button>

    <?php form_close(); ?>
      

    

    
    </div>
  </div>
</div>