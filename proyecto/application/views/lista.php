<div class="container">   
  <div class="row">
    <div class="col-md-12">

    <?php  echo form_open_multipart('cliente/agregar'); ?> 
    <button type="submit" class="btn btn-primary">AGREGAR CLIENTE</button>

    <?php form_close(); ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($cliente->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombres;?></td>
      <td><?php echo $row->apellidoPaterno;?></td>
      <td><?php echo $row->apellidoMaterno;?></td>
      <td><?php echo $row->direccion;?></td>
      <td><?php echo $row->telefono;?></td>
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