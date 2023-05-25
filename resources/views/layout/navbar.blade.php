  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
       <!-- Skrip dibawah ini akan aktif ketika posisi mobile -->
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index.php">Bengkel Online</a>
     </div>
     <!-- Daftar menu yang diinginkan-->
     <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li>
          <a href="index.php">
            <span class="glyphicon glyphicon-home"></span> Beranda
          </a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-folder-open"></span> &nbsp;Mastering Data 
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">

            <li>
             <a href="index.php?lihat=jasa/index">
               <span class="glyphicon glyphicon-user"></span> &nbsp;Master Jasa</a>
             </li>
             <li>
               <a href="index.php?lihat=sparepart/index">
                 <span class="glyphicon glyphicon-lock"></span> &nbsp;Master Sparepart</a>
               </li>

             </ul>
           </li>

           <li>
            <a href="index.php?lihat=Transaksi/index">
              <span class="glyphicon glyphicon-usd"></span> Transaksi
            </a>
          </li>
          
          <li class="right">
            <a href="logout.php">
              <span class=" glyphicon glyphicon-log-out"></span> Logout
            </a>
          </li>

        </ul>
      </div><!-- #navbar -->
    </div><!-- .container -->
  </nav><!-- .navbar -->