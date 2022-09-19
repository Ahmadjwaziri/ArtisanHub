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
                            <!--
                            <a class="btn btn-primary btn-xs" data-toggle="modal" href="#myModal" data-target="#myModal"><i class="fa fa-edit"></i> Add New Admin</a>
-->
                            <br><br>

                            <h4 class="mb-4">Performance Table</h4>

                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="float:right;">
                            <div id="myTable" class="table data-table table-hover table-ultra-responsive">
                                <table class="table data-table table-hover table-ultra-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Staff Id</th>
                                            <th scope="col">Unit</th>
                                            <th scope="col">Completed Jobs</th>
                                            <th scope="col">Accepted Jobs</th>
                                            <th scope="col">Rejected Jobs</th>
                                            <th scope="col">Total Jobs</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Ahmad Jafar Waziri</td>
                                            <td>WEB/001</td>
                                            <td>WEB</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>20</td>
                                            <td>60</td>
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
          <p>Fullname:Ahmad Jafar Waziri</p>
          <p>Phone:08097754572</p>
          <p>Role:admin</p>
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
















<?php include('footer.php');            ?>