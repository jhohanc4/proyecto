<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="<?php echo base_url();?>img/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Login de usuario  </h2>
    </div>


<?php 
 echo form_open_multipart('usuario/validar',array('id'=>'form1','class'=>'form_control'))
?>

<div class="mb-3">
    <label class="form-label">Login</label>
    <input type="text" name="login" class="form-control" placeholder="Ingrese su login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Ingrese su Password">
  </div>
  <button type="submit" class="btn btn-primary">INGRESAR</button>
<?php 
echo form_close();
 ?>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 JHOHAN MARCO</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>