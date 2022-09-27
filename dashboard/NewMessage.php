<?php include('header.php'); ?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-40">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h2 class="mb-4">Send Message</h2>
                            <form>
                            <div class="mb-3">
                            <input type="text"  hidden class="form-control" id="exampleInputEmail1">
                            <input type="text"  hidden class="form-control" id="exampleInputEmail1">
                                  
                                
                               
                            
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Your Description here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                           
                                <button type="submit" class="btn btn-primary">Sent</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <!-- Form End -->

<?php include('footer.php'); ?>
