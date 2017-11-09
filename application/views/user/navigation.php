<!-- Header Section Start -->
    <div class="header">    
      <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="<?= base_url(''); ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt=""></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?= base_url('login'); ?>"><i class="lnr lnr-enter"></i> Login</a></li>
              <li><a href="<?= base_url('signup'); ?>"><i class="lnr lnr-user"></i> Signup</a></li>
              <li class="postadd">
                <a class="btn btn-danger btn-post" href="<?= base_url('post-ads'); ?>"><span class="fa fa-plus-circle"></span> Post an Ad</a>
              </li>
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      <!-- Off Canvas Navigation -->
      <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
      <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <i class="fa fa-close"></i>
        </div>
          <h3 class="title-menu">All Pages</h3>
          <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="<?= base_url(''); ?>">Home</a></li>           
            <li><a href="<?= base_url('about'); ?>">About us</a></li>            
           
			
			<!-- dropdown-->
			<li class="dropdown">
             <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Textile Category <span class="caret"></span></a>
			 
             <ul class="dropdown-menu">
			 
			<li class="dropdown">
            <a href="yarn.php" role="button" aria-haspopup="true" aria-expanded="false">Yarn</a>
             </li>
			 
             <li class="dropdown">
             <a href="hoodie.php" role="button" aria-haspopup="true" aria-expanded="false">Hoodie</a>
             </li>
								
								
			<li class="dropdown">
            <a href="full-sleeves-t-shirts.php" role="button" aria-haspopup="true" aria-expanded="false">Full-Sleeves T-Shirts</a>
            </li>
								 
			<li class="dropdown">
           <a href="jackets.php" role="button" aria-haspopup="true" aria-expanded="false">Jackets</a>
            </li>		
                               
             </ul>
            </li>
			
			<!-- dropdown-->
			
		        
            <li><a href="<?= base_url('user/faq'); ?>">FAQ</a></li>
			 <li><a href="<?= base_url('user/contact'); ?>">Contact</a></li>
           
        </ul><!--- End Menu -->
      </div> <!--- End Off Canvas Side Menu -->
      <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
        <p><i class="fa fa-file-text-o"></i> All Pages</p>
      </div>
    </div>
    <!-- Header Section End -->