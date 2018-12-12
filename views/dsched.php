<?php $page_title = "Notes 1" ?>

<?php 

$days_of_week = ["", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$times_of_day = ["AM", "Noon", "PM"];
$dsched_am = ["Lavida", "Amlodipine"];
$dsched_nn = ["Lavida", "Aspirin"];
$dsched_pm = ["Lavida", "Norten", "Dopezil"];
$dsched_pm_mwf = ["Lavida", "Norten", "Dopezil", "Atorvastatin"];
$dsched = [$dsched_am, $dsched_nn, $dsched_pm];
$dsched_mwf = [$dsched_am, $dsched_nn, $dsched_pm_mwf];


 ?>

<?php require_once("../partials/start-body.php") ?>

	<?php require_once("../partials/navbar.php") ?>

	<div class="container-fluid">

		<div class="row">
			
			<div id="content-box" class="col-12">

				<h1> Daddy's Medicine Schedule </h1>

				<table>

					<thead>

						<?php 
						for ($i=0; $i < count($days_of_week); $i++) { 
						 	echo "<th>".$days_of_week[$i]."</th>";
						 } ?>
						
					</thead>

					<?php 

					

					for ($i=0; $i < count($times_of_day); $i++) { 
						echo "<tr><td>".$times_of_day[$i]."</td>";						
							for ($k=0; $k < count($days_of_week)-1; $k++) { 
								echo "<td valign=\"top\">";
								if ($k == 1 || $k == 3 || $k ==5) {
									for ($l=0; $l < count($dsched_mwf[$i]); $l++) { 
										echo $dsched_mwf[$i][$l]."<br>";
									}
								}else {
									for ($l=0; $l < count($dsched[$i]); $l++) { 
										echo $dsched[$i][$l]."<br>";
									}
								}								
								echo "</td>";
							}
					}
					?>

				 </table>
				
			</div>
		</div>





	</div>

	<?php require_once("../partials/footer.php") ?>


<?php require_once("../partials/end-body.php") ?>