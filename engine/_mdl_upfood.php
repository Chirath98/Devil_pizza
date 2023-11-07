
<div class="modal fade" id="mdl_upfood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <form action="engine\_upfood.php" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="uid" value="<?php echo $uid ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Update food</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>             
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="title"  required>
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="descript" class="form-control" name="descript" required></textarea>
                        <label for="floatingInput">Description</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" placeholder="food price" class="form-control"  name="price" required>
                        <label for="floatingInput">Price</label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example" name="category">
                            <label for="floatingInput">category</label>
                            <?php                    
                                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";                                                            
                                $res = mysqli_query($con, $sql);
                                $count = mysqli_num_rows($res);
                                if($count>0)
                                {
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $id = $row['id'];
                                        $title = $row['title'];
                                        ?>
                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <option value="0">No Category Found</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <P class="form-check-inline">Featured</P>
                    <div class="form-check form-check-inline">               
                        <input class="form-check-input"   type="radio" name="featured" value="Yes">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="featured" value="No" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                    </div>
                    <br>
                    <P class="form-check-inline">Active</P>
                    <div class="form-check form-check-inline">               
                        <input class="form-check-input" type="radio" name="active" value="Yes">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Yes
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="active" value="No" checked>
                        <label class="form-check-label" for="flexRadioDefault4">
                            No
                        </label>
                    </div>   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update food</button>
                    </div>    
            </form>
        </div>
    </div>
</div>