 
 <!--Begin carousel-->
 <div id="homepage_carousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homepage_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources\images\Carousel\Car9.jpg" class="d-block w-100" alt="Slide1">
                <!--div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </!--div-->
            </div>

            <div class="carousel-item">
                <img src="resources\images\Carousel\car2.jpg" class="d-block w-100" alt="Slide2">
                <!--div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </!--div-->
            </div>

            <div class="carousel-item">
                <img src="resources\images\Carousel\Car4.jpg" class="d-block w-100" alt="slide3">
                <!--div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </!--div-->
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#homepage_carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepage_carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!--End carousel-->


<br>
<!--Food serch section -->
<section class="food-search text-center">
    <div class="">

    <form action="<?php echo SITEURL; ?>pages\Food_search.php" method="POST">
        <div class="d-md-flex justify-content-md-center container">
            <input class="form-control me-2" type="search" name="search" placeholder="Search for food" aria-label="Search">
            <button type="submit" name="submit" value="Search" class="btn1 btn1-primary">Search</button>
        </div>   
    </form>
  </div>
</section>
<!--Food serch section ends -->
<br>

<!--Categories section start here -->
<section class="categories">
 <div class="container">
     <h2 class="text-center">Categories</h2>
     <br>

    <div class="row" >
    <div class="col-sm-4">
        <div class="card-1">
        <a href="http://localhost/?page=pages/Pizza.php"><img src="resources\images\categories\Food_Category_302.jpg" class="card-img-top" alt=""></a>
        <!--div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn btn-danger">Order Now</a>
        </div-->
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-1">
        <a href="http://localhost/?page=pages/Appetizers.php"><img src="resources\images\categories\Food_Category_306.jpg" class="card-img-top" alt=""></a>
        <!--div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn btn-danger">Order Now</a>
        </-->
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card-1">
        <a href="http://localhost/?page=pages/Dessert.php"><img src="resources\images\categories\Food_Category_400.jpg" class="card-img-top" alt="..."></a>
        <!--div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn btn-danger">Order Now</a>
        </div-->
        </div>
    </div>
    </div>
 </div>
</section>
<!--Categories section end here -->

<br><br><br>

<!-- fOOD MEnu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Food Menu</h2>

        <?php 
        $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' LIMIT 6";
        $res2 = mysqli_query($con, $sql2);
        $count2 = mysqli_num_rows($res2);

        if($count2>0)
        {
            //Food Available
            while($row=mysqli_fetch_assoc($res2))
            {
                //Get all the values
                $uid = $row['uid'];
                $title = $row['title'];
                $price = $row['price'];
                $descript = $row['descript'];
                $image_name = $row['image_name'];
                ?>

                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php 
                            //Check whether image available or not
                            if($image_name=="")
                            {
                                //Image not Available
                                echo "<div class='error'>Image not available.</div>";
                            }
                            else
                            {
                                //Image Available
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
                        <!--
                        <a href="?page=pages/Order.php&food_id=<?php echo $uid; ?>" class="btn btn-primary" onclick="getLocation()" >Order Now</a> -->
                        <a id ="loclink" href="?page=pages/Order.php&food_id=<?php echo $uid; ?>" onclick="getLocation()" class="btn btn-primary">Order Now</a>
                        <!--a href="engine\_order.php?food_id=<?php echo $uid; ?>" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#order" aria-controls="offcanvasRight">Order Now</a!-->                          
                        
                    </div>
                </div>

                <?php
            }
        }
        else
        {
            //Food Not Available 
            echo "<div class='error'>Food not available.</div>";
        }
        
        ?>
        <div class="clearfix"></div>

        

    </div>

    <p class="text-center">
        <a href="http://localhost/?page=pages/Food.php">See All Foods</a>
        
    </p>
</section>
<!-- fOOD Menu Section Ends Here -->




    





