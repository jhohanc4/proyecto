<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR PRODUCTO</h2>

      <?php 
      foreach ($inforepuesto->result() as $row) 
      {
        echo form_open_multipart('repuesto/modificarbd2'); 
        ?> 
        
              <input type="hidden" name="idproducto" value="<?php echo $row->idproducto;?>" > 
              <input type="text" name="nombrerepuesto" placeholder="Ingrese el nombre del producto" value="<?php echo $row->nombreProducto;?>" required>
              <input type="text" name="unidadmedida" placeholder="Ingrese la unidad de medida" value="<?php echo $row->unidadMedida;?>" required>
              <input type="text" name="caracteristica" placeholder="Ingrese caracteristicas del producto" value="<?php echo $row->caracteristicas;?>" >
              <input type="text" name="marca" placeholder="Ingrese la marca" value="<?php echo $row->marca;?>" required>
              <input type="text" name="stock" placeholder="Ingrese el estock" value="<?php echo $row->stock;?>" required>
              <button type="submit" class="btn btn-success">MODIFICAR PRODUCTO</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>