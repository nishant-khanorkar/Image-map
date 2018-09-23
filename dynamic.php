<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<?php include 'connection.php';
include 'user.php';
$con_obj = new connection();
$user_obj = new user($con_obj);
?>
<head>
  
  <title>WAT Project</title>
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/app.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/custom-rtl.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css-rtl/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style-rtl.css">
  <!-- END Custom CSS-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="vertical-layout vertical-overlay-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-overlay-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark bg-primary navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="index.html">
              
              <h3 class="brand-text">AT PROJECT</h3>
			  <img class="brand-logo" alt="modern admin logo" src="app-assets/images/logo/logo.png">
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Wat project...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">!Hello
                  </span>
              </a>
            </li>
            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
              </div>
            </li>
            
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow menu-border"
  data-scroll-to-active="true">
    
  </div>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">This is the WAT project</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">Static page
                </li>
                <li class="breadcrumb-item"><a href="#">Dynamic page</a>
                </li>
                <li class="breadcrumb-item active">Image maps
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- E-commerce section start -->
        <section id="ecommerce-stats">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase">Dynamic Page</h4>
            </div>
          </div>  
           
        </section>
        <!-- // E-commerce section end -->
        <!-- Shopping cards section start -->
		<div class="row">
        <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="hidden-label-colored-controls">Add User</h4>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                      <p>Enter email Id and Name</p>
                    </div>
                    <form class="form">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-eye"></i> About User</h4>
                        <div class="row">
                          <div class="form-group col-md-6 mb-2">
                            <label class="sr-only" for="userinput1">Fist Name</label>
                            <input type="text" id="name" class="form-control border-primary" placeholder="Name"
                            name="name">
                          </div>
                          <div class="form-group col-6 mb-2">
                            <label class="sr-only" for="userinput5">Email</label>
                            <input class="form-control border-primary" type="email" placeholder="email" id="email">
                          </div>
                        </div>
                        
                      </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" id="save" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
		<div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="hidden-label-colored-controls">Add User</h4>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                      <p>Registered email Id and Name</p>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
						   $temp_row=$user_obj->getUser();
						   $i=1;
						   while($row=mysqli_fetch_assoc($temp_row)){
						 ?>
                        <tr>
                          <th scope="row"><?php echo $i;?></th>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                        </tr>
						<?php
                          $i++ ;}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
		</div>
        <!-- // Shopping cards section end -->
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
	
	$(document).ready(function () {
        
	function get_value_of_element (element) {
            if (element.is('p')) {
                return element.text();
            } else {
                return element.val().trim();
            }
        }
	$("#save").click(function (e) {
		console.log("submit Save called");

		var php_data = {};
  php_data.name = get_value_of_element($("#name"));
  php_data.email = get_value_of_element($("#email"));
  console.log("hi2");
  console.log(php_data);

		$.ajax({
			type: 'post',
			url: 'insert.php',
			data: php_data,
			success: function(response) {
				//alert("User added!");

			},
			error: function(jqXHR, textStatus, errorThrown){
			  //alert("Error!");
				//if fails
			}
	   });
		alert("User added!");
	});
	});

	</script>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="#"
        target="_blank">Paddi</a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/cards/card-ecommerce.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>