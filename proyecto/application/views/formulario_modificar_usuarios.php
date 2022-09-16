<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>MODIFICAR USUARIO</h2>

      <br>
      
      <?php 
      foreach ($infousuario->result() as $row) 
      {
        echo form_open_multipart('usuario/modificarbd'); 
        ?> 
        
        <input type="hidden" name="idusuario" value="<?php echo $row->idusuario;?>" > 

        <div class="row mb-3">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CARGO</label>
              <div class="col-sm-10">
                 <select type="text" name="cargo" class="form-select" aria-label="Cargo" >
                     <option value="<?php echo $row->idcargo;?>" selected>Seleccione el cargo</option>
                     <option value="1">administrador</option>
                     <option value="2">empleado</option>
                  </select>
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombres</label>
        <div class="col-sm-10">
           <input type="text" name="nombres" class="form-control" placeholder="Ingrese su apellido paterno" value="<?php echo $row->nombres;?>" required>
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Primer apellido</label>
        <div class="col-sm-10">
           <input type="text" name="apellidopaterno" class="form-control" placeholder="Ingrese su primer apellido" value="<?php echo $row->apellidoPaterno;?>" >
        </div>
        </div>

        <div class="row mb-3">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Segundo apellido</label>
        <div class="col-sm-10">
           <input type="text" name="apellidomaterno" class="form-control" placeholder="Ingrese su segundo apellido" value="<?php echo $row->apellidoMaterno;?>" >
        </div>
        </div>
        
        <br>
              
        <button type="submit" class="btn btn-success">MODIFICAR USUARIO</button>

    <?php echo form_close();
      }
       ?>

    

    
    </div>
  </div>
</div>