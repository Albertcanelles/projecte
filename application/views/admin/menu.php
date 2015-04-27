<!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                   <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/index") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/index') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Inici</span></a></li>
                    <li <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/concert") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/welcome/concert') ?>"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Concerts</span></a>
                       
                    </li>
                     <li <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/assajs") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/welcome/assajs') ?>"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Assajos</span></a>
                       
                    </li>
                    <li <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/partitura") { ?> class="active" <?php } ?>><a href="<?php  echo base_url('index.php/welcome/partitura') ?>"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Partitures</span></a>
                      
                    </li>
                    <li <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/video") { ?> class="active"<?php } ?>><a href="<?php echo base_url('index.php/welcome/video') ?>"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Videos</span></a>
                          
                    </li>
                    <li <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/membre") { ?> class="active" <?php } ?>><a href="<?php echo base_url('index.php/welcome/membre') ?>"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Membres</span></a>
                      
                    </li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistaconcertadmin") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistaconcertadmin') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Vista Concerts</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistaassajadmin") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistaassajadmin') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Vista Assajos</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistapartituresadmin") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistapartituresadmin') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Vista Partitures</span></a></li>
                    <li  <?php if ($_SERVER["REQUEST_URI"] == "/kadmin/index.php/welcome/vistavideosadmin") { ?>  class="active" <?php } ?> ><a href="<?php echo base_url('index.php/welcome/vistavideosadmin') ?>"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Vista Videos</span></a></li>
                </ul>
            </div>
        </nav>

