 <div class="container">   
  <div class="row">
    <div class="col-md-12">
      <h1>Lista de motorizados dehabilitados</h1>

    <?php  echo form_open_multipart('motorizado/index'); ?> 
    <button type="submit" name="buton1" class="btn btn-primary">VER MOTORIZADOS HABILITADOS</button>
    <?php echo form_close(); ?>
    
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
      <th scope="col">habilitar</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $indice=1;
foreach ($motorizado->result() as $row) 
{?>
    <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php echo $row->idcategoria;?></td>
      <td><?php echo $row->idcliente;?></td>
      <td><?php echo $row->placa;?></td>
      <td><?php echo $row->marca;?></td>
      <td><?php echo $row->modelo;?></td>
      <td><?php echo $row->color;?></td>
      <td><?php echo $row->codigoChasis;?></td>

      <td>
        <?php echo form_open_multipart("motorizado/habilitarbd") ?>
        <input type="hidden" name="idmotorizado" value="<?php echo $row->idmotorizado; ?>">
        <input type="submit" name="buttonz" value="Habilitar" class="btn btn-danger">
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