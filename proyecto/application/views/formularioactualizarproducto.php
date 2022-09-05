<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR PRODUCTO</h2>

      <br>
      
      <?php 
      foreach ($infoproducto->result() as $row) 
      {
        echo form_open_multipart('producto/actualizarbd'); 
        ?> 
        
        
              <input type="hidden" name="idproducto" value="<?php echo $row->idproducto;?>" >

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre del producto</label>
              <div class="col-sm-10">
                 <input type="text" name="nombreproducto" class="form-control"placeholder="nombre del producto" value="<?php echo $row->nombreProducto;?>" required>
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cantidad</label>
              <div class="col-sm-10">
                 <input type="text" name="cantidad" class="form-control"placeholder="cantidad" value="<?php echo $row->cantidad;?>" required>
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unidad de Medida</label>
              <div class="col-sm-10">
                 <input type="text" name="unidadmedida"class="form-control" placeholder="unidad de medida" value="<?php echo $row->unidadMedida;?>" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Caracteristicas</label>
              <div class="col-sm-10">
                 <input type="text" name="caracteristicas"class="form-control" placeholder="Ingrese caracteristicas del producto" value="<?php echo $row->caracteristicas;?>" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Marca</label>
              <div class="col-sm-10">
                 <input type="text" name="marca" class="form-control"placeholder="Ingrese la marca" value="<?php echo $row->marca;?>" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Stock</label>
              <div class="col-sm-10">
                 <input type="text" name="stock" class="form-control"placeholder="Ingrese el estock" value="<?php echo $row->stock;?>"  required> 
              </div>
              </div>

              <br>
              
              <button type="submit" class="btn btn-success">MODIFICAR PRODUCTO</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>