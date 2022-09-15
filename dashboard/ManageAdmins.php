<?php include ('header.php'); ?>


<link media="all" type="text/css" rel="stylesheet" href="assets/libs/data-table/datatables.min.css">
<br><br>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <div class="panel-heading">
                            
                            <a class="btn btn-primary btn-xs" data-toggle="modal" href="#myModal" data-target="#myModal"><i class="fa fa-edit"></i> Add New Admin</a>
                            <br><br>
                            <h6 class="mb-4">Admins Tables</h6>
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
                                            <th scope="col">Role</th>
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
                                            <td>Admin</td>
                                            <td>Active</td>
                                            <td>
                                            <a href="#"><button type="button" class="btn btn-danger m-2">Danger</button></a>
                                            <a href="#"><button type="button" class="btn btn-success m-2">Enable</button></a>
                                            <a href="#"><button type="button" class="btn btn-danger m-2">Disable</button></a>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>




           
            
           <?php include ('footer.php'); ?>

    
