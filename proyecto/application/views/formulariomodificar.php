<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR CLIENTE</h2>

      <?php 
      foreach ($infocliente->result() as $row) 
      {
        echo form_open_multipart('cliente/modificarbd'); 
        ?> 
        
              <input type="hidden" name="idcliente" value="<?php echo $row->idcliente;?>" > 
              <input type="text" name="nombres" placeholder="Ingrese su nombre" value="<?php echo $row->nombres;?>" required>
              <input type="text" name="apellidopaterno" placeholder="Ingrese su apellido paterno" value="<?php echo $row->apellidoPaterno;?>" required>
              <input type="text" name="apellidomaterno" placeholder="Ingrese su apellido materno" value="<?php echo $row->apellidoMaterno;?>" >
              <input type="text" name="direccion" placeholder="Ingrese su direccion" value="<?php echo $row->direccion;?>" required>
              <input type="text" name="telefono" placeholder="Ingrese su numero de telefono" value="<?php echo $row->telefono;?>" required>
              <button type="submit" class="btn btn-success">MODIFICAR CLIENTE</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>