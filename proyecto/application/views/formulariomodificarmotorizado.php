<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR MOTORIZADO</h2>

      <br>
      
      <?php 
      foreach ($infomotorizado->result() as $row) 
      {
        echo form_open_multipart('motorizado/modificarbd'); 
        ?> 
        
        
              <input type="hidden" name="idmotorizado" value="<?php echo $row->idmotorizado;?>" >

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Categoria</label>
              <div class="col-sm-10">
                 <input type="text" name="categoria" class="form-control"placeholder="nombre de la Categoria" value="<?php echo $row->idcategoria;?>" required>
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cliente</label>
              <div class="col-sm-10">
                 <input type="text" name="cliente"class="form-control" placeholder="nombre del cliente" value="<?php echo $row->idcliente;?>" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Placa</label>
              <div class="col-sm-10">
                 <input type="text" name="placa"class="form-control" placeholder="numero de placa" value="<?php echo $row->placa;?>" >
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Modelo</label>
              <div class="col-sm-10">
                 <input type="text" name="modelo" class="form-control"placeholder="Ingrese el modelo del motorizado" value="<?php echo $row->modelo;?>" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Color</label>
              <div class="col-sm-10">
                 <input type="text" name="color" class="form-control"placeholder="Ingrese el color del motorizado" value="<?php echo $row->color;?>"  > 
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero de chasis</label>
              <div class="col-sm-10">
                 <input type="text" name="numeroChasis" class="form-control"placeholder="Ingrese el numero de chasis" value="<?php echo $row->codigoChasis;?>"  > 
              </div>
              </div>
              <br>
              
              <button type="submit" class="btn btn-success">MODIFICAR MOTORIZADO</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>