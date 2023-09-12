
<div id="menu">
  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Menu <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Perfil Usuario</a></li>
      <?php  
      if($rol == 2){
        echo'<li><a href="#">Agregar Administrador</a></li>';
      }
      ?>
      <li class="divider"></li>
      <li><a href="../controller/salir.php">Salir</a></li>
    </ul>
  </div>
</div>