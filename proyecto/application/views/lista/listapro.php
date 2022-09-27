 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de productos</h1>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <?php  echo form_open_multipart('producto/agregar'); ?> 
    <button type="submit" class="btn btn-primary btn-lg ">AGREGAR PRODUCTO</button>
    <?php echo form_close(); ?>
    
    <br>

     <?php  echo form_open_multipart('producto/deshabilitados'); ?> 
    <button type="submit" class="btn btn-danger btn-lg ">VER PRODUCTOS DESHABILITADOS</button>
    <?php echo form_close(); ?>
</div>
    
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Producto</th>
      <th scope="col">Caracteristicas</th>
      <th scope="col">Marca</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Unidad Medida</th>
      <th scope="col">Modificar Producto</th>
      <th scope="col">Deshabilitar Producto</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($producto->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombreProducto;?></td>
      <td><?php echo $row->caracteristicas;?></td>
      <td><?php echo $row->marca;?></td>
      <td><?php echo $row->cantidad;?></td>
      <td><?php echo $row->unidadMedida;?></td>
      <td>
        <?php echo form_open_multipart("producto/modificar") ?>
        <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
        <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
        <?php echo form_close();?>
      </td>

      <td>
        <?php echo form_open_multipart("producto/deshabilitarbd") ?>
        <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
        <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-danger">
        <?php echo form_close();?>
      </td>

    </tr>
  <?php
  $indice++;
}

?>
    
  </tbody>
</table>
    </div>
  </div>
</div>