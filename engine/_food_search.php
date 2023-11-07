<!doctype html>
<html lang="en">


<head>
    <!--impot meta definitions-->
    <?php require_once("_meta.php"); ?>
    
    <!--impot style definitions-->
    <?php require_once("_styles.php"); ?>
    <title>Devil Pizza</title>
   
   
</head>
<body>
      <div class="container">
        <!--impot navbar-->
        <?php require_once("_navbar.php"); ?>
        <!--impot content-->
    
        <br>
<!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php 

                //Get the Search Keyword
                // $search = $_POST['search'];
                $search = mysqli_real_escape_string($con, $_POST['search']);
            
            ?>
        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Foods on Your Search</h2>

            <?php 

                //SQL Query to Get foods based on search keyword
                //$search = burger '; DROP database name;
                // "SELECT * FROM tbl_food WHERE title LIKE '%burger'%' OR description LIKE '%burger%'";
                $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR descript LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($con, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether food available of not
                if($count>0)
                {
                    //Food Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $uid = $row['uid'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $descript = $row['descript'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    // Check whether image name is available or not
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="/resources/images/food/<?php echo $image_name; ?>" width="180px" class="img-responsive img-curve" >
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
                                <br>

                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food Not Available
                    echo "<div class='error'>Food not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->


        
        


    


        <!--impot footer-->
        <?php require_once("engine\_footer.php"); ?>
        <?php require_once("engine\_scripts.php"); ?>

        <!--import login/log off model-->
        <?php require_once("engine\_mdl_upfood.php"); ?>
        <?php require_once("engine\_mdl_regfood.php"); ?>
        <?php require_once("engine\_mdl_login.php"); ?>
        <?php require_once("engine\_mdl_reguser.php"); ?>


      </div>
</body>
</html> 