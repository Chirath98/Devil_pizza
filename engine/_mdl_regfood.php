
<div class="modal-content">
    <form action="engine/_regfood.php" method="POST" enctype="multipart/form-data">              
        <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputProduct"  name="title" required>
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Description of the Food." name="descript" required>
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
                    <button type="submit" class="btn btn-primary">Register new food</button>
                </div>
        </div>
    </form>
</div>


