<?php   
include('header.php');

?>

<link media="all" type="text/css" rel="stylesheet" href="assets/libs/data-table/datatables.min.css">
<br><br>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <div class="panel-heading">
                            
                            <a class="btn btn-primary btn-xs"  href="AddService.php" ><i class="fa fa-edit"></i>Request New Service</a>
                            <br><br>

                            <h4 class="mb-4">Request Service</h4>

                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="float:right;">
                            <div id="myTable" class="table data-table table-hover table-ultra-responsive">
                                <table class="table data-table table-hover table-ultra-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">User id</th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Remark</th>
                                            <th scope="col">Staff Assigned</th>
                                            <th scope="col">Progress</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Ahmad Jafar Waziri</td>
                                            <td>user/001</td>
                                            <td>Web App</td>
                                            <td>Email integration</td>
                                            <td>it has been done your code send via email</td>
                                            <td><a href="#"><button type="button" class="btn btn-success m-2">Ahmad</button></a></td>
                                            <td>Completed</td>
                                            <td>Active</td>
                                            <td>

                                            
                                           
                                            <button type="button" class="btn btn btn-success m-2" data-toggle="modal" data-target="#text1">View</button>

                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>


                                    
                                </table>
                                <!-- Modal -->
  <div class="modal fade" id="text1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="background-color:white ;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <b>
          <h4 class="modal-title">Admin View</h4>
        </div>
        
        <div class="modal-body">
            <center>
        <img src="img/ahmad.jpeg" alt="" height="70px" width="70px" >
        </center>
          <p>Description:Ahmad Jafar Waziri</p>
          <p>Service:Web App</p>
          
          <a href="#"><button type="button" class="btn btn-success m-2">Edit</button></a>
         <a href="#"><button type="button" class="btn btn-danger m-2">Delete</button></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </b>
    </div>
  </div>

                            </div>
                        </div>
                    </div>
                </div>
             </div>

















<?php include('footer.php') ?>