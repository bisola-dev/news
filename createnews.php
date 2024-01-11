<?php
require_once('connection.php');
  

  if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $news = $_POST['news'];
 
    
 if($title == ""|| $news == "" ){
      echo "<script type ='text/javascript'>
            alert('please do not submit an unfilled form.')
            </script>";
          }
  
 $noway=sqlsrv_query($conn, "INSERT INTO [Nysc].[dbo].[news] (Title, News_body) VALUES ('$title','$news')");

 echo "<script type ='text/javascript'>
            alert('News successfully created.')
            </script>";
          }
          



if (isset($_POST['uppy'])){
  $crease2 = $_POST['crease'];
  $title2 = $_POST['title2'];
  $news2 = $_POST['news2'];

  $skillzx = sqlsrv_query($conn, "UPDATE [Nysc].[dbo].[news] SET title ='$title2', News_body='$news2' WHERE id=$crease2");
  
    echo'<script type="text/javascript">
        alert("News successfully updated.")
        </script>';
       
   }

   
if(isset($_POST["delete"])){
  $crease = $_POST['crease'];

$sqlu = sqlsrv_query($conn," DELETE FROM [Nysc].[dbo].[news] WHERE id = $crease");

  echo'<script type="text/javascript">
        alert("news successfully deleted.");
        </script>';
         $ms = "news successfully deleted. ";

} 



?>

<!DOCTYPE html> 
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Create Class </title>
		
	
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script type="text/javascript" src="jquery.js"></script>
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- /Header -->
			  <!-- Sidebar -->
          
      <!-- /Sidebar -->
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Create  News</h3>
								<ul class="breadcrumb">
					 				 
									<li class="breadcrumb-item active"></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
							<form method="post" action="" >
							<div class="col-md-12">
							 
								<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="form-group">
											<label>News Title <span class="text-danger"></span></label>
												<input name="title" type="text" maxlength="200"  class="form-control" required>
										</div>
									</div>
								</div>

                	<div class="row">
									<div class="col-sm-6 col-md-12">
										<div class="form-group">
											<label>News content <span class="text-danger"></span></label>
												<textarea name="news"  rows = "5" cols = "50" class="form-control" required> </textarea>
										</div>
									</div>
								</div>

                                         <div class="submit-section">
										<button  type="submit" name="submit" class="btn btn-info submit-btn">Submit news</button>
									</div>
								</form>
		               

      <hr>
			
				       <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>S/N</th>
                                       <th>Newtitle</th>
                                       <th>Content</th>
                                       <th>Edit</th>
                                       <th>Delete</th>
                                       
                                       
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
      
 <?php 

 $query4 = "SELECT * FROM [Nysc].[dbo].[news]";
 $user_query4 = sqlsrv_query($conn, $query4);
 $count=1;
 while ($row4 = sqlsrv_fetch_array($user_query4)){
 $crease= $row4['Id'];
 $titthy= $row4['Title'];
 $neww= $row4['News_body'];
  

                                    ?>
                                       
                                    <tr>
                                      <td style="display: none;"><?php echo $crease; ?></td> 
                                       <td><?php echo $count;?></td>
                                       <td><?php echo $titthy;?></td>
                                       <td><?php echo $neww;?></td>



                                   
                                              <td class="text-right">
                                              <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item upp" href="#" data-toggle="modal" data-target=""><i class="fa fa-pencil m-r-5"></i> Edit</a></div>
                                                    </div>
                                                </td>

                                   <td><form method="POST" action="" >
                                   <input type="hidden"  value= "<?php echo $crease;?>" name="crease">
                               <p><input type="submit" name="delete" value="delete news"> </p></form></td>
						
						</div>
					</div>

                                          
                                      
                                    </tr>
                                    <?php $count++;}?> 
                                 </tbody>
                              </table>       
                           </div>
      </div>

                        </div>


                     </div>
                  </div>
               </div>
            </section>
			</div>
            </div>
			<!-- /Page Wrapper -->
      <div id="checck" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Class </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                           <form method="post" action="">

                    <div class="col-sm-6 col-md-12">
                  <div class="form-group">
                      <input type="hidden" name="crease" id ="clak1" value="<?php echo $crease;?>">
                   
                    </div>
                  </div>


                   <div class="col-sm-6 col-md-12">
                    <div class="form-group">
                      <label>Title<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="title2" id="clak2">
                        
                    </div>
                  </div>

            
									<div class="col-sm-6 col-md-12">
										<div class="form-group">
											<label>News content <span class="text-danger"></span></label>
												<textarea name="news2"  rows = "5" cols = "50" id="clak3" class="form-control" required> </textarea>
										</div>
									</div>
								</div>
                 
               <div class="col-sm-6 col-md-12">
                <div class="submit-section">
            <button type="submit" name="uppy" class="btn btn-primary submit-btn m-r-10">Update</button>
            </div>
            </form>
            </div>
    <!-- <tr>
          <td>
            <button onclick="myFunction()">Print this page</button>
          </td>
        </tr> -->

<hr>

    <!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
      <script src="assets/js/app.js"></script>
        <script>
    $(document).ready(function(){
      $('.upp').on('click', function(){
        //$('#dataTableExample1 tbody').on('click', 'tr', function(){
        $('#checck').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function(){
        return $(this).text();
        }).get();
        console.log(data);
        $('#clak1').val(data[0]);
        $('#clak2').val(data[2]);
        $('#clak3').val(data[3]);

        });
    
    });
  </script>
		
    </body>

</html> 