<?php
    include_once 'model/evenement.php';
    include_once 'controller/evenementC.php';
	require_once ("composant/composant.php");


    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new evenementC();
    if (
		isset($_POST["type"]) && 
        isset($_POST["description"]) && 
        isset($_POST["lieu"]) && 
        isset($_POST["date"]) &&
		isset($_POST["datef"])

    ) {
        if ( 
			!empty($_POST["type"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["lieu"]) && 
            !empty($_POST["date"]) &&
			!empty($_POST["datef"])

        ) {
            $user = new evenement( 
				$_POST['type'],
                $_POST['description'],
                $_POST['lieu'],
                $_POST['date'],
				$_POST['datef']


            );
            $userC->ajouterevenement($user);
			header('Location:evenement.php');

          textnode("success","aaaaaaaaaaaaaaaaaaaaa");
        }
        else
            $error = "Missing information";
    }

	function textnode($classname,$msg)
	{ 
		$element="<h6 class='$classname' >$msg</h6>";	
		echo $element;
    }

	$utilisateurC=new evenementC();
	$listeUsers=$utilisateurC->afficherevenement();

    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="controleeve.js"></script>
</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Nature</span>PET</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Moetaz</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		<li ><a href="ajouterevenement.php"><em class="fa fa-plus-square">&nbsp;</em>Ajouter Evenement</a></li>
			<li><a href="evenement.php"><em class="fa fa-book-open">&nbsp;</em> Afficher Evenement</a></li>
			<li><a href="promoanimaux.php"><em class="fa fa-paw">&nbsp;</em> Promotions animaux</a></li>
			<li><a href="promoplantes.php"><em  class="fab fa-pagelines" aria-hidden="true">&nbsp;</em> Promotions Plantes</a></li>
		

		
			
		</div><!--/.row-->
		<div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>

 <form action="" method="POST">	
 <div class="row">
            <div class="col-md-0.5">
			</div>
			<br>
    <div class="container">

        <div class="row">
            <div class="col-md-1">
			</div>
			
            <div class="col-md-6">
                <div class="container text-center">
             <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="d-flex justify-content-center">
        	<br> <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir type :<td></div>
            <form action="" method="post" class="w-50">
			<div class="pt-4">
                    <?php inputElement("<i class='fas fa-book'></i>","type", "type",""); ?>
                </div><br>
				
                <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir Description :<td></div>
                <div class="pt-4">
                    <?php inputElement("<i class='fas fa-book'></i>","description", "description",""); ?>
                </div><br>
				 <div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir Date Debut :<td></div>
                <div class="pt-4">
                  
                        <?php inputElement2("<i class='fas fa-table'></i>","date debut", "date",""); ?>
						<div class="pt-4">
						<br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir Date Fin :<td> </div>
                        <?php inputElement2("<i class='fas fa-table'></i>","date fin", "datef",""); ?>
						
            
            <br><div class="col-md-5"><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<td>Saisir Adresse :<td></div>
                    <div class="pt-4">
                        <?php inputElement("<i class='fas fa-location-arrow'></i>","Adresse", "lieu",""); ?>
                    </div>
                </div>
           <br>
                <div class=" ">
                        <?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Envoyer'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Actualiser'"); ?>
                       
                </div>

                
            </form>

        </div>
 
 
 
 </form>
		  <br>
         <!-- Bootstrap table  -->
        

        


    </div>
            </div>
        </div>
    </div>
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>
