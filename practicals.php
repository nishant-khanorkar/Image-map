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
				  <h4 class="card-title" id="hidden-label-colored-controls">Select a Practical</h4>
				</div>
				<div class="card-content collpase show">
				  <div class="card-body">
					<div class="card-text">
					  <p></p>
					</div>
					<table class="table">
					  <thead>
						<tr>
						  <th>#</th>
						  <th>Practical Name</th>
						  <th>Description</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
						   $temp_row=$user_obj->getPracticals($id);
						   $i=1;
						   while($row=mysqli_fetch_assoc($temp_row)){
						 ?>
						<tr>
						  <th scope="row"><?php echo $i ;?></th>
						  <td><a href="<?php echo 'files/'.$id.'/'.$row['fname'];?>"><?php echo $row['name'];?></a></td>
						  <td>Lorem Ipsum</td>
						</tr>
						   <?php $i=$i+1; } ?>
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

			