<br>
<!--Add Food menu Start here-->
<div class="main-conntent">
    <div class="warapper">
        <h1>Manage Food</h1>

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add New food</button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Add food</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
          <?php require_once("engine\_mdl_regfood.php"); ?>
        </div>
    </div>
</div>
<!--Add Food menu End here-->


<br/><br />

<?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

        <table class="tbl-full table container">
        <thead>
            <tr>
                <th scope="col">S.N.</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Featured</th>
                <th scope="col">Active</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                //Create a SQL Query to Get all the Food
                $sql = "SELECT * FROM tbl_food";
                $res = mysqli_query($con, $sql);
                $count = mysqli_num_rows($res);

                $sn=1;

                if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $uid = $row['uid'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $image_name = $row['image_name'];
                        $featured = $row['featured'];
                        $active = $row['active'];
                        ?>

                        <tr>
                            <td><?php echo $sn++; ?>. </td>
                            <td><?php echo $title; ?></td>
                            <td>$<?php echo $price; ?></td>
                            <td>
                                <?php  
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image not Added.</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="/resources/images/food/<?php echo $image_name; ?>" width="100px">
                                        <?php
                                    }
                                ?>
                            </td>
                            <td><?php echo $featured; ?></td>
                            <td><?php echo $active; ?></td>
                            <td>
                                <a href="?page=pages/Uporder.php&uid=<?php echo $uid; ?>" class="btn btn-success" >Update Food</a>
                                <a href="engine/_delfood.php?uid=<?php echo $uid; ?>&image_name=<?php echo $image_name; ?>" class="btn btn-danger">Delete Food</a>
                            </td>
                        </tr>

                        <?php
                    }
                }
                else
                {
                    //Food not Added in Database
                    echo "<tr> <td colspan='7' class='error'> Food not Added Yet. </td> </tr>";
                }
            ?>
        </tbody>
        </table>


        <?php require_once("engine\_mdl_upfood.php"); ?>