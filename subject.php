<?php include 'header.php'; ?>
<?php
	include 'connection.php';
	include 'user.php';
	$con_obj = new connection();
	$user_obj = new user($con_obj);
	$id=$_GET['id'];
?>	
<div class="app-content content">
    <div class="content-wrapper">
		<div class="content-body">
			<div class="col-md-12">
			  <div class="card">
				<div class="card-header">
				  <h4 class="card-title" id="hidden-label-colored-controls">Select a Subject</h4>
				</div>
				<div class="card-content collpase show">
				  <div class="card-body">
					<div class="card-text">
					  <p>Subject Name and code</p>
					</div>
					<table class="table">
					  <thead>
						<tr>
						  <th>#Sem</th>
						  <th>Name</th>
						  <th>Subject code</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
						   $temp_row=$user_obj->getSubjects($id);
						   while($row=mysqli_fetch_assoc($temp_row)){
						 ?>
						<tr>
						  <th scope="row"><?php echo $row['sem'];?></th>
						  <td><a href="practicals.php?id=<?php echo $row['code'];?>"><?php echo $row['name'];?></a></td>
						  <td><?php echo $row['code'];?></td>
						</tr>
						   <?php } ?>
					  </tbody>
					</table>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php include 'footer.php'; ?>

			