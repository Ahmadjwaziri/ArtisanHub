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
                            
                           
                            <br><br>

                            <h4 class="mb-4">Post</h4>

                        </div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="float:right;">
                            <div id="myTable" class="table data-table table-hover table-ultra-responsive">
                                <table class="table data-table table-hover table-ultra-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Post Title</th>
                                            <th scope="col">Post Description</th>
                                            <th scope="col">Post Date</th>
                                            <th scope="col">Post Status</th>
                                            <th>Action</th>
                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Wellcome to hub</td>
                                            <td>You can use content to refer to the amount or proportion of something that a substance contains.
Sunflower margarine has the same fat content as butter. 
He was astonished at the high gold content in the 340 million-year-old rock. </td>
                                            <td>12/03/2018</td>
                                            <td>Active</td>
                                           <td><a href="#"><button type="button" class="btn btn-success m-2">Edit</button></a>
                                           <a href="#"><button type="button" class="btn btn-danger m-2">Delete</button></a>
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