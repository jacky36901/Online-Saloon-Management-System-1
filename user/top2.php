<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Parlour a Beauty and Spa Category Responsive Web Template | Home :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
    
    <body id="home">

<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="index.html"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
            Magic Mirror
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="viewpackage.php">Package</a>
                    </li> 
  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Booking <b class="caret"></b></a>
                                     <?php $sql="select category_name from category";
                                     $tbl=getDatas($sql);
                                     ?>
									<ul class="dropdown-menu">
                                        <?php
                                        foreach($tbl as $row){
                                        ?>
										<li><a href="booking.php?mode=<?php echo $row[0]?>"><?php echo $row[0]?></a></li>
										<li class="divider"></li>
										<?php
                                        }
                                        ?>
									</ul>
								</li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">My Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile1.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="changepassword.php">Change Pasword</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="../common/home.php">Log Out</a>
                    </li>
                </ul>
         
         
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>