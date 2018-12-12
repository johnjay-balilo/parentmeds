<?php $page_title = "Daddy's Medicine" ?>

<?php 

$dmed_info = [
	"Amlodipine" => "Hypertension",
	"Lavida (or Tidomet)" => "Parkinson's disease",
	"Aspirin" => "Cardiovascular disease",
	"Donepezil" => "Alzheimer's disease",
	"Atorvastatin" => "Cholesterol",
	"Norten" => "Hypertension, heart failure",
]

 ?>



<?php require_once("../partials/start-body.php") ?>

	<?php require_once("../partials/navbar.php") ?>

	<div class="container-fluid">

		<div class="row">
			
			<div id="content-box" class="col-12">

				<h1> Daddy's Medicine </h1>

				<table>

					<thead>
						<th> Medicine Name </th>
						<th> Purpose </th>
					</thead>

					<?php 

					foreach ($dmed_info as $key => $value) {
						echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
					}

					 ?>

				 </table>



				

				

				


				
			</div>
		</div>





	</div>

	<?php require_once("../partials/footer.php") ?>


<?php require_once("../partials/end-body.php") ?>