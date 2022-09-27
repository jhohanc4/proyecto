<div class="container">   
  <div class="row">
    <div class="col-md-12">

      <h2>AGREGAR MOTORIZADO</h2>
     <br>
        <?php  echo form_open_multipart('motorizado/agregarbd'); ?>

  <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Categoria</label>
              <div class="col-sm-10">
                 <select type="text" name="categoria" class="form-select" aria-label="categoria">
                     <option selected>Seleccione categoria</option>
                     <option value="1">automovil</option>
                     <option value="2">motocicleta</option>
                  </select>
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Cliente</label>
              <div class="col-sm-10">
                 <input type="text" name="cliente"class="form-control" placeholder="nombre del cliente" required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Placa</label>
              <div class="col-sm-10">
                 <input type="text" name="placa"class="form-control" placeholder="numero de placa"  >
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Modelo</label>
              <div class="col-sm-10">
                 <input type="text" name="modelo" class="form-control"placeholder="Ingrese el modelo del motorizado"  required>
              </div>
              </div>
              
              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Color</label>
              <div class="col-sm-10">
                 <input type="text" name="color" class="form-control"placeholder="Ingrese el color del motorizado"   > 
              </div>
              </div>

              <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Numero de chasis</label>
              <div class="col-sm-10">
                 <input type="text" name="numeroChasis" class="form-control"placeholder="Ingrese el numero de chasis"  > 
              </div>
              </div>

    
    <br>
    <button type="submit" class="btn btn-primary">AGREGAR MOTORIZADO</button>

    <?php form_close(); ?>

    


    
    </div>
  </div>
</div>