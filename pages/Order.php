<?php require_once ("engine/_db.php") ?>


<!--Food Order cart -->
  <?php 
        //CHeck whether food id is set or not
        if(isset($_GET['food_id']))
        {
            //Get the Food id and details of the selected food
            $food_id = $_GET['food_id'];

            //Get the DEtails of the SElected Food
            $sql = "SELECT * FROM tbl_food WHERE uid=$food_id";
            //Execute the Query
            $res = mysqli_query($con, $sql);
            //Count the rows
            $count = mysqli_num_rows($res);
            //CHeck whether the data is available or not
            if($count==1)
            {
                //WE Have DAta
                //GEt the Data from Database
                $row = mysqli_fetch_assoc($res);

                $title = $row['title'];
                $price = $row['price'];
                $image_name = $row['image_name'];
            }
            else
            {
                //Food not Availabe
                //REdirect to Home Page
               header('location:'.SITEURL);
            }
        }
        else
        {
            //echo "Redirect to homepage";
            header('location:'.SITEURL);
        }
    ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container3">
            
            <form action="" method="POST" class="myForm" >
                <fieldset>
                    <legend>Selected Food</legend>
                    <div class="food-menu-img">
                        <img src="/resources/images/food/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve"> 
                    </div>
    
                    <div class="food-menu-desc">
                        <h5><?php echo $title; ?></h5>
                        <input type="hidden" name="food" value="<?php echo $title; ?>">

                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive form-control" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Dimithra chirath " class="input-responsive form-control" required>
                   
                   <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +94xxxxxxxxx" class="input-responsive form-control" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g.Cb009374@student.apiit.lk" class="input-responsive form-control" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" placeholder="E.g. Street, City, Country" class="input-responsive form-control" required></textarea>
                      <br>

                    <input type="hidden" name="latitude" value="" >
                    <input type="hidden" name="longitude" value="" >
                   
                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php 

                //CHeck whether submit button is clicked or not
                if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                    $total = $price * $qty; // total = price x qty 

                    $order_date = date("Y-m-d h:i:sa"); //Order DAte

                    $status = "Ordered";  // Ordered, On Delivery, Delivered, Cancelled

                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];
                    $latitude = $_POST["latitude"];
                    $longitude = $_POST["longitude"];


                    //Save the Order in Databaase
                    //Create SQL to save the data
                    $sql = "INSERT INTO tbl_order SET 
                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address',
                        latitude = '$latitude',
                        longitude = '$longitude'
                    ";

                    //echo $sql; die();

                    //Execute the Query
                    $res2 = mysqli_query($con, $sql);
                    

                    //Check whether query executed successfully or not
                    if($res2==true)
                    {
                        //Query Executed and Order Saved
                        $_SESSION['order'] = "<div class='alert alert-success text-center'><strong>Success!</strong> Your Food Ordered Successfully.</div>";
                        //header('location:'.SITEURL);
                    }
                    else
                    {
                        //Failed to Save Order
                        $_SESSION['order'] = "<div class='alert alert-danger text-center'>Failed to Order Food.</div>";
                        //header('location:'.SITEURL);
                    }

                }
            
            ?>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->  


