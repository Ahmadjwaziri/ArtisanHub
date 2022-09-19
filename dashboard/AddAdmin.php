<?php

include('header.php');

?>


<!-- Form Start -->
<div class="container-fluid pt-4 px-40">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h2 class="mb-4">Add New Admin</h2>
                            <form>
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <label for="exampleInputEmail1" class="form-label">Select Role</label>
                           
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Open this select Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Staff</option>
                               
                            </select>
                            <label for="exampleInputEmail1" class="form-label">Select Unit</label>
                           
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Open this select Unit</option>
                                <option value="1">WEB & MOBILE APP</option>
                                <option value="2">SATELLITE</option>
                                <option value="3">SOLAR</option>
                            </select>
                           
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Passport Upload</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
                            </div>
                                
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

















<?php include('footer.php'); ?>
