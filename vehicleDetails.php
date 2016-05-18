<?php
require 'php/newReservationDetail.php';

if (isset($_POST['searchbar']))
{

    $vehicleNo = $_POST['searchbar']; 

}else{
	$vehicleNo = $_GET['vehicleNo'];
}
if (isset($_GET['vehicleID']))
{

    $driverID = $_GET['vehicleID']; 

}
 
 

$con = new database();
$y = $con->getTableDetailsWithColName("vehical_detail","v_number",$vehicleNo);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/Ucsc.jpg">

    <title>Vehical Detail</title>
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    
    
    <!-- owl carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/styleIndex.css" rel="stylesheet">
    
    

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo"><img class="logoo" src="img/Ucsc.jpg"></a>
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope"></i>
                            <span class="badge bg-important"><?php echo $count ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have <?php echo $count ?> new messages</p>
                            </li>
                            <?php
								foreach($x as $row) {
									if($row[4]=="0"){
										?>
								
                                            <li>
                                                <a href="#">
                                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                                    <span class="subject">
                                                    <span class="from"><?php echo $row[1]; ?></span>
                                                    <?php
														$dhm;
														date_default_timezone_set('Asia/Colombo');
														$currDate = date("Y-m-d H:i:s");
														$reserveDate = $row[2];
														$diff = strtotime($currDate) - strtotime($reserveDate);
														if(floor($diff/(3600*24*365))>0){
															
															if(floor($diff/(3600*24*365))>1){
																$dhm = " years";
															}else{
																$dhm = " year";
															}
															$diff=floor($diff/(3600*24*365));
															
														}else if(floor($diff/(3600*24*30))>0){
															if(floor($diff/(3600*24*30))>1){
																switch ($diff) {
																	case 1:
																		$dhm = " month";
																		break;
																	case 2:
																		$dhm = " months";
																		break;
																	case 3:
																		$dhm = " months";
																		break;
																	case 4:
																		$dhm = " months";
																		break;
																	case 5:
																		$dhm = " months";
																		break;
																	case 6:
																		$dhm = " months";
																		break;
																	case 7:
																		$dhm = " months";
																		break;
																	case 8:
																		$dhm = " months";
																		break;
																	case 9:
																		$dhm = " months";
																		break;
																	case 10:
																		$dhm = " months";
																		break;
																	case 11:
																		$dhm = " months";
																		break;
																	
																	default:
																		$dhm = " months";
																}
															}else
																$dhm = " month";
															$diff=floor($diff/(3600*24*30));
														}else if(floor($diff/(3600*24))>0){
															if(floor($diff/(3600*24))>1){
																$dhm = " days";
															}else
																$dhm = " day";
															$diff=floor($diff/(3600*24));
														}else if(floor($diff/(3600))>0){
															if(floor($diff/(3600))>1){
																$dhm = " hours";
															}else
																$dhm = " hour";
															$diff=floor($diff/(3600));
														}else if(floor($diff/60)>0){
															if(floor($diff/60)>1){
																$dhm = " minntes";
															}else
																$dhm = " minnte";
															$diff=floor($diff/60);
														}else{
															if($diff>1){
																$dhm = " seconds";
															}else
																$dhm = " second";
														}
													
													?>
                                                    <span class="time"><?php echo $diff.$dhm ?></span>
                                                    <span class="message">
                                                        <?php echo $row[3]; ?>
                                                    </span>
                                                </a>
                                            </li>
                            <?php
									}
								}
							?>
                            
                            
                            
                            
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/DSC_0616.JPG">
                            </span>
                            <span class="username">Isuru Sandamal</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-user"></i>
                          <span>Members</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="allMembers.php">Staff Members</a></li>                          
                          <li><a class="" href="drivers.php">Drivers</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-car"></i>
                          <span>Vehicals</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="allVehical.php">Vehical Details</a></li>
                          <li><a class="" href="buttons.html">maintenance Details</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="map.php">
                          <i class="fa fa-car"></i>
                          <i class="fa fa-rss"></i>
                          <span>Track Vehical</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Reservation</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="reservationDetail.php">Requests</a></li>
                          <li><a class="" href="acceptedRequest.php">Accepted Requests</a></li>
                      </ul>
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-car"></i> Vehical Details</h3>
                    <ul class="list-inline">
                    	<li>
                        	<a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                        </li>
                        <li>
                        	<a class="btn btn-social-icon btn-twitter"><span class="fa fa-facebook"></span></a>
                        </li>
                     	<li>
                        	<a class="btn btn-social-icon btn-twitter"><span class="fa fa-google"></span></a>
                        </li>
                    
                    </ul>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-car"></i> Vehicals</li>
						<li><i class="#"></i><a href="allVehical.php"> All Vehicals</a></li>
                        <li><i class="#"></i> <?php echo $vehicleNo ?></li>					  	
					</ol>
				</div>
			</div>
            
            
           
            
            <div class="row">            	
            <?php
			
				foreach($y as $row1) {
							
					if(isset($_GET['vehicleID'])){
										
			?>
            	<div class="col-lg-4 image">
					<a class="thumbnail">
						<img class="img-responsive" src="img/<?php echo $row1[11] ?>" alt="">
					</a>
				</div>
                        
                        
                        <div class="col-lg-8 userDetail">
                            
                            	<div class="jumbotron detail">
                                	<div class="row">
                                    	<header class="info">
                                        	<span>Vehicle Info</span>
                                        
                                        </header>
                                        <form action="php/update_vehicle.php?vehicleID=<?php echo $row1[0] ?>&vehicleNo=<?php echo $vehicleNo ?>" method="post" class="act">
                                    	
                                        	<label class="des">Engine No :</label><input name="engineNo" type="text" class="del" value="<?php echo $row1[1] ?>"><br>
                                            <label class="des">Chassis No :</label><input name="chassisNo" type="text" class="del" value="<?php echo $row1[2] ?>"><br>
                                            <label class="des">Vehicle No :</label><input name="vehicleNo" type="text" class="del" value="<?php echo $row1[3] ?>"><br>
                                            <label class="des">Model :</label><input name="model" type="text" class="del" value="<?php echo $row1[4] ?>"><br>
                                            <label class="des">Manufactured Year :</label><input type="text" name="year" class="del" value="<?php echo $row1[5] ?>"><br>
                                            <label class="des">Kilometers :</label><input name="km" type="text" class="del" value="<?php echo $row1[6] ?>"><br>
                                            <label class="des">Color :</label><input type="text" name="color" class="del" value="<?php echo $row1[7] ?>"><br>
                                            <label class="des">Licence No :</label><input name="licenceNo" type="text" class="del" value="<?php echo $row1[8] ?>"><br>
                                            <label class="des">Licence Renew Date :</label><input name="renewDate" type="text" class="del" value="<?php echo $row1[9] ?>"><br>
                                            <label class="des">Last Service Date :</label><input name="serviceDate" type="text" class="del" value="<?php echo $row1[10] ?>"><br>
                                            
                                            <button type="submit" class="btn btn-danger done"><i class="fa fa-check-circle-o"></i> Done</button>
                                          <a class="btn btn-danger cancel" href="vehicleDetails.php?vehicleNo=<?php echo $vehicleNo ?>"><i class="icon_close_alt2"></i> Cancel</a>
                                          </form>
                                            <?php
											
										}else{
										?>
						<div class="col-lg-4 image">
					<a class="thumbnail">
						<img class="img-responsive" src="img/<?php echo $row1[11] ?>" alt="">
					</a>
                            
                            <a class="btn btn-success" id="updateUser" href="vehicleDetails.php?vehicleNo=<?php echo $vehicleNo ?>&vehicleID=<?php echo $row1[0] ?>"><i class="fa fa-pencil-square-o"></i> Update</a>
                            <a class="btn btn-danger launch-modal1" id="deleteUser" href="#" data-modal-id="modal-register1"><i class="fa fa-trash-o"></i> Delete</a>
						</div>
                        
                        
                        
                        <div class="col-lg-8 userDetail">
                            
                            	<div class="jumbotron detail">
                                	<div class="row">
                                    	<header class="info">
                                        	<span>Vehicle Info</span>
                                        
                                        </header>
											
										
                                        	<label class="des">Engine No :</label><input type="text" readonly class="del" value="<?php echo $row1[1] ?>"><br>
                                            <label class="des">Chassis No :</label><input type="text" readonly class="del" value="<?php echo $row1[2] ?>"><br>
                                            <label class="des">Vehicle No :</label><input type="text" readonly class="del" value="<?php echo $row1[3] ?>"><br>
                                            <label class="des">Model :</label><input type="text" readonly class="del" value="<?php echo $row1[4] ?>"><br>
                                            <label class="des">Manufactured Year :</label><input type="text" readonly class="del" value="<?php echo $row1[5] ?>"><br>
                                             <label class="des">Kilometers :</label><input type="text" readonly class="del" value="<?php echo $row1[6] ?>"><br>
                                            <label class="des">Color :</label><input type="text" readonly class="del" value="<?php echo $row1[7] ?>"><br>
                                            <label class="des">Licence No :</label><input type="text" readonly class="del" value="<?php echo $row1[8] ?>"><br>
                                            <label class="des">Licence Renew Date :</label><input type="text" readonly class="del" value="<?php echo $row1[9] ?>"><br>
                                            <label class="des">Last Service Date :</label><input type="text" readonly class="del" value="<?php echo $row1[10] ?>"><br>
                                           
                                       
                                    </div>
                                
                                </div>
                                 <?php
										}
				
										?>

                        </div>
                        
                        <div class="modal fade" id="modal-register1" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
                        <div class="confirm-box">
                            
                                
                                <div class="confirm-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </button>
                                </div>
                                
                                <div class="confirm-body">
                                    
                                    <form role="form" action="php/delete_vehicle.php?vehicleID=<?php echo $row1[0] ?>" method="post" class="registration-form1">
                                        
                                        <h3>Are you sure you want to delete!</h3>
                                        <div class="buttons">
                                        
                                        	<button type="submit" class="but">Yes</button>
                                        	<button type="button" class="but" data-dismiss="modal">No</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                        
                        
                <?php
				}
				?>
                    
        	</div>

                    
               
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    
    
    
    
    <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    
    <!-- popup -->
    <script src="js/scripts1.js"></script>
    
    
    
    
   
  </body>
</html>
