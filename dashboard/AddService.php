<?php include('header.php'); ?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-40">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h2 class="mb-4">Add New Service</h2>
                            <form>
                            <div class="mb-3">
                            <input type="text"  hidden class="form-control" id="exampleInputEmail1">
                                    
                                <label for="exampleInputEmail1" class="form-label">Select Service</label>
                           
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Open this select Service</option>
                                <option value="1">Web</option>
                                <option value="2">Catering</option>
                               
                            </select>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Your Description here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                            <input type="text"  hidden class="form-control" id="exampleInputEmail1">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

<?php include('footer.php'); ?>
