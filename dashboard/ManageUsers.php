<?php include ('header.php'); ?>


<link media="all" type="text/css" rel="stylesheet" href="assets/libs/data-table/datatables.min.css">
<br><br>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <div class="panel-heading">
                            
                           
                            <br><br>

                            <h4 class="mb-4">Admins Tables</h4>

                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="float:right;">
                            <div id="myTable" class="table data-table table-hover table-ultra-responsive">
                                <table class="table data-table table-hover table-ultra-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Service Status</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Ahmad Jafar Waziri</td>
                                            <td>08097754572</td>
                                            <td>ahmedjafarwaziri@email.com</td>
                                            <td>YES</td>
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
          <h4 class="modal-title">User View</h4>
        </div>
        
        <div class="modal-body">
            <center>
        <img src="img/ahmad.jpeg" alt="" height="70px" width="70px" >
        </center>
          <p>Fullname:Ahmad Jafar Waziri</p>
          <p>Phone:08097754572</p>
          <p>Address: No. 18 Sharamanseer Near Haramain, Mecca</p>
          <a href="#"><button type="button" class="btn btn-success m-2">Enable</button></a>
         <a href="#"><button type="button" class="btn btn-danger m-2">Disable</button></a>
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




           
            
           <?php include ('footer.php'); ?>

    
