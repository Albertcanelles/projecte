<!--BEGIN SIDEBAR MENU-->
      

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/index") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/admin/index') ?>"><span class="glyphicon glyphicon-dashboard"></span>Inici</a></li>
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/actualitat") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/admin/actualitat') ?>"><span class="glyphicon glyphicon-th"></span>Actualitat</a></li>
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/calendari") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/admin/calendari') ?>"><span class="glyphicon glyphicon-stats"></span>Calendari</a></li>
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/documents") { ?> class="active" <?php } ?>><a href="<?php  echo base_url('index.php/admin/documents') ?>"><span class="glyphicon glyphicon-list-alt"></span>Documents</a></li>
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/galeria") { ?> class="active"<?php } ?>><a href="<?php echo base_url('index.php/admin/galeria') ?>"><span class="glyphicon glyphicon-pencil"></span>Galeria</a></li>
            <li <?php if ($_SERVER["REQUEST_URI"] == "/projecte/index.php/admin/usuaris") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/admin/usuaris') ?>"><span class="glyphicon glyphicon-info-sign"></span>Usuaris</a></li>
            <li role="presentation" class="divider"></li>
            <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
        </ul>
        <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
    </div><!--/.sidebar-->
