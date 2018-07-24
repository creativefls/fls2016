<ul class="sidebar-menu">
<li class="header">MAIN NAVIGATION</li>
		<?php echo $this->altui->CI_sideMenu("main","DASHBOARD","fa fa-home"); ?>
		<li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>PENDAFTAR FLS 2016</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?php echo $this->altui->CI_sideMenu("master/daftar/1","Pendidikan","fa fa-circle-o"); ?>
			    <?php echo $this->altui->CI_sideMenu("master/daftar/2","Lingkungan","fa fa-circle-o"); ?>
			    <?php echo $this->altui->CI_sideMenu("master/daftar/3","Ekonomi Kreatif","fa fa-circle-o"); ?>
			    <?php echo $this->altui->CI_sideMenu("master/daftar/4","Kearifan Lokal","fa fa-circle-o"); ?>
			    <?php echo $this->altui->CI_sideMenu("master/daftar/5","Media Massa","fa fa-circle-o"); ?>
			    <?php echo $this->altui->CI_sideMenu("master/daftar/6","Kebijakan Publik","fa fa-circle-o"); ?>
              </ul>
            </li>

            <?php echo $this->altui->CI_sideMenu("master/artikel","SUBMIT ARTIKEL","fa fa-pencil-square-o"); ?>
            <?php echo $this->altui->CI_sideMenu("master/sponsorship","SPONSOR","fa fa-money"); ?>

</ul>