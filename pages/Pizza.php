<!-- fOOD MEnu Section Starts Here -->
<br>
<section class="food-menu">
        <div class="container">
            <h2 class="text-center">Pan & Other crusts</h2>
            <?php 
            $sql2 = "SELECT * FROM tbl_food WHERE category_id='6' ";
            $res2 = mysqli_query($con, $sql2);
            $count2 = mysqli_num_rows($res2);
            if($count2>0)
            {
                while($row=mysqli_fetch_assoc($res2))
                {
                    $uid = $row['uid'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $descript = $row['descript'];
                    $image_name = $row['image_name'];
                    ?>
                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php                 
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="/resources/images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">$<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $descript; ?>
                            </p>
                            <a id ="loclink" href="?page=pages/Order.php&food_id=<?php echo $uid; ?>" onclick="getLocation()" class="btn btn-primary">Order Now</a>                            
                            
                        </div>
                    </div>
                    <?php
                }
            }
            else
            {
                echo "<div class='error'>Food not available.</div>";
            }           
            ?>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->


    