<!doctype html>
<?php
require('../connect.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
<!--                 <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
 -->      
      <h3 style="color: green">Peace project</h3>
       </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fas fa-file-alt"></i> Help</a>
                </li>
                <li>
                    <a href="logout.php"><i class="fas fa-table"></i> Logout</a>
                </li>              
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-" style="background-color: darkblue">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <h2 class="text-white">Welcome to file duplicate remover system</h2>
                </div>
            </nav>
            <!-- end of navbar navigation -->
               <?php
                if(isset($_GET['del'])){
                $del = $_GET['del'];
                $sql= mysqli_query($con,"DELETE FROM form_data WHERE id ='$del'");
                if($sql){
                echo "<script>
                  alert('Deleted successful');
                  window.location.href='index.php';
                </script>";
               }
              }
               ?>
                <div class="container">
                  <h2>Uplaod File</h2>
                  <!-- Trigger the modal with a button -->
                  <button type="button" class="btn btn-info btn-lg" style="background-color: darkblue" data-toggle="modal" data-target="#myModal">Create</button>
                    <div class="container mt-4">
                      <table class="table table-bordered table-sm">
                      <?php
                        $sql= mysqli_query($con,"SELECT * FROM form_data");
                        if(mysqli_num_rows($sql) > 0){
                         ?>
                            <tr>
                              <th>S/N</th>
                                <th>File Name</th>
                                <th>Checksum</th>
                                <th>Action</th>
                            </tr>
                           <?php
                              while($data = mysqli_fetch_assoc($sql)){
                                ?>
                                <td><?php echo $data['id']?></td>
                                <td><?php echo $data['name']?></td>
                                <td><?php echo $data['file_name']?></td>
                                <td onclick="return confirm('Are you sure you want to delete this file??')"><a href="index.php?del=<?php echo $data['id']?>"><i class="btn btn-danger">Delete</i></a></td>
                                <!-- <td><iframe src="uploads/<?php echo $data['file_name']?>" width="200px"></iframe> </td> -->
                                </tr>
                              <?php
                            }
                           ?>
                        
                        <?php
                          }else{
                            ?>
                             <tr>
                               <td>
                                 No File
                               </td>
                             </tr>
                            <?php
                          }
                        ?>
                        </table>
                    </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="statusMsg"></div>
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Uplaod and check exsising file</h4>
                          </div>
                          <div class="row">
                            <div class="col-l-3"></div>
                            <div class="col-lg-6">
                                
                                <form action="upload.php" method="POST" enctype="multipart/form-data">
                                  <input type="file" name="file" class="fileToUpload form-control" ></input><br>
                                  <input type="text" placeholder="File name" name="filename" id="filename" class="form-control"/><br>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" name="up"style="background-color: darkblue">Upload</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </form>

                            </div>
                              <div class="col-lg-3"></div>
                            </div>
                            
                          </div>
                        </div>
                     </div>
                    </div>
                  </div>
                  </div>

                </div>
                  
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  /*function uploadfile(){
  var filename = $('#filename').val();                    //To save file with this name
  var file_data = $('.fileToUpload').prop('files')[0];    //Fetch the file
  var form_data = new FormData();
  form_data.append("file",file_data);
  form_data.append("filename",filename);
  //Ajax to send file to upload
  $.ajax({
      url: "upload.php",                      //Server api to receive the file
             type: "POST",
             dataType: 'script',
             cache: false,
             contentType: false,
             processData: false,
             data: form_data,
          success:function(data2){
            $('#success_id').html(data2);
          }
    });
}*/
</script>
</body>

</html>
