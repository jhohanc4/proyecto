<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>AGREGAR PRODUCTO</h2>
     <br>
        <?php  echo form_open_multipart('producto/agregarbd'); ?>

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRE DEL PRODUCTO</label>
  <div class="col-sm-10">
     <input type="text" name="nombreproducto" class="form-control" autocomplete="off" placeholder="Ingrese el nombre del producto" required>
  </div>
  </div>

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">UNIDAD DE MEDIDA</label>
  <div class="col-sm-10">
     <input type="text"  name="unidadmedida" class="form-control" autocomplete="off" placeholder="Ingrese la unidad de medida" required>
  </div>  
  </div>
   
  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CARACTERISTICAS</label>
  <div class="col-sm-10">
     <input type="text"  name="caracteristicas" class="form-control" autocomplete="off" placeholder="Ingrese la caracteristicas del producto">
  </div>  
  </div> 

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">MARCA</label>
  <div class="col-sm-10">
     <input type="text" name="marca" class="form-control" autocomplete="off" placeholder="Ingrese la marca del producto"required>
  </div>  
  </div> 

  <div class="row mb-3">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">STOCK</label>
  <div class="col-sm-10">
     <input type="text"  name="stock" class="form-control" autocomplete="off" placeholder="Ingrese el stock de almacen" required>
  </div>  
  </div> 

    
    <br>
    <button type="submit" class="btn btn-primary">AGREGAR PRODUCTO</button>

    <?php form_close(); ?>

    


    
    </div>
  </div>
</div>