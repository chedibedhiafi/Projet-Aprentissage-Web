<?PHP
	include "../controller/CommandesC.php";

	$commandesC=new CommandesC();
	$listecommandes=$commandesC->afficher_commande();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">
    <title>Table Commandes</title>
</head>
<body>



</body>

</html>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Afficher Commandes</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
						<em class="fa fa-envelope"></em><span class="label label-danger"></span>
					</a>
					
				
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
				<div class="profile-usertitle-name">Skander</div>
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
			<li class=""><a href="afficherLivraison.php"><em class="fa fa-dashboard">&nbsp;</em>AFFICHER LIVRAISON</a></li>
			<li class=""><a href="TraiterDemLivraison.php"><em class="fa fa-dashboard">&nbsp;</em>Traiter Livraison</a></li>
			<li class="active" ><a href="afficherCommande.php"><em class="fa fa-calendar">&nbsp;</em> AFFICHER COMMANDES</a></li>
			<li class=""><a href="TraiterCommande.php"><em class="fa fa-dashboard">&nbsp;</em>Traiter Commandes</a></li>
			<li class=""><a href="trierCommandeDESC.php"><em class="fa fa-dashboard">&nbsp;</em>Trier Commandes DESC</a></li>
			<li class=""><a href="trierCommandeASC.php"><em class="fa fa-dashboard">&nbsp;</em>Trier Commandes ASC</a></li>
		
		
			
		</div><!--/.row-->
	</div>	<!--/.main-->

	<body>

    <h1>Commandes</h1>

    <hr>
	
<div>
    <table>
	
	<tr id="header">
            <th>ID</th>			
            <th>ID CLIENT</th>
            <th>PAIMENT</th>
            <th>TOTAL</th>
			
			
        </tr>
  
	
  <?PHP
				foreach($listecommandes as $commandes){
			?>
				<tr>
					<td><?PHP echo $commandes['idCommande']; ?></td>
					<td><?PHP echo $commandes['idClient']; ?></td>
					<td><?PHP echo $commandes['paiment']; ?></td>
					<td><?PHP echo $commandes['montant']; ?></td>
					
					
					
				</tr>
				
			<?PHP
				}
			?>
  
			
    </table>
</div>
<div >
                <a href="pdfevenement.php" download="pdfevenement.php" class="btn btn-lg btn-outline">
                    <i class="fa fa-download"></i> Telecharger La liste 
                </a>
				<a href="pdfevenement.php"  class="btn btn-lg btn-outline">
				<i class="fas fa-file-pdf"></i></i> 
                </a>
				<a href="tri.php">Tri Croissant Selon TOTAL </a></li>
			   	    <a href="tri2.php">Tri Decroissant Selon TOTAL</a></li>
         </div>


    </div>
            </div>
        </div>
    </div>
	</div>
	
				

	
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



