 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de clientes</h1>

    <?php  echo form_open_multipart('cliente/agregar'); ?> 
    <button type="submit" class="btn btn-primary btn-lg ">AGREGAR CLIENTE</button>
    <?php echo form_close(); ?>
    
    <br>

     <?php  echo form_open_multipart('cliente/deshabilitados'); ?> 
    <button type="submit" class="btn btn-warning btn-lg ">VER CLIENTES DESHABILITADOS</button>
    <?php echo form_close(); ?>
    
    <br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Modificar</th>
      <th scope="col">Deshabilitar</th>
      <th scope="col">Registrar Motorizado</th>
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

      <td>
        <?php echo form_open_multipart("cliente/modificar") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
        <input type="submit" name="buttony" value="Modificar" class="btn btn-success">
        <?php echo form_close();?>
      </td>




      <td>
        <?php echo form_open_multipart("cliente/deshabilitarbd") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
        <input type="submit" name="buttonz" value="Deshabilitar" class="btn btn-warning">
        <?php echo form_close();?>
      </td>

      <td>
        <?php echo form_open_multipart("motorizado/registrarmotbd") ?>
        <input type="hidden" name="idcliente" value="<?php echo $row->idcliente; ?>">
        <input type="submit" name="buttonz" value="Registrar" class="btn btn-secondary">
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