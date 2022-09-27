 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de motorizados</h1>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <?php  echo form_open_multipart('motorizado/agregar'); ?> 
    <button type="submit" class="btn btn-primary btn-lg ">AGREGAR MOTORIZADO</button>
    <?php echo form_close(); ?>
    
    <br>

     <?php  echo form_open_multipart('motorizado/deshabilitados'); ?> 
    <button type="submit" class="btn btn-danger btn-lg ">VER MOTORIZADOS DESHABILITADOS</button>
    <?php echo form_close(); ?>
</div>
    
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categoria</th>
      <th scope="col">Cliente</th>
      <th scope="col">Placa</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Codigo de chasis</th>
      <th scope="col">Modificar</th>
      <th scope="col">Deshabilitar</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($motorizado->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->nombreCategoria;?></td>
      <td><?php echo $row->nombres;?> &nbsp; <?php echo $row->apellidoPaterno;?> &nbsp; <?php echo $row->apellidoMaterno;?></td>
      <td><?php echo $row->placa;?></td>
      <td><?php echo $row->marca;?></td>
      <td><?php echo $row->modelo;?></td>
      <td><?php echo $row->color;?></td>
      <td><?php echo $row->codigoChasis;?></td>

      <td>
        <?php echo form_open_multipart("motorizado/modificar") ?>
        <input type="hidden" name="idmotorizado" value="<?php echo $row->idmotorizado; ?>">
        <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
        <?php echo form_close();?>
      </td>




      <td>
        <?php echo form_open_multipart("motorizado/deshabilitarbd") ?>
        <input type="hidden" name="idmotorizado" value="<?php echo $row->idmotorizado; ?>">
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