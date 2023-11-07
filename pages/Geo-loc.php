<?php require_once ("engine/_db.php") ?>

  <?php 
        if(isset($_GET['order_id']))
        {
            //Get the Food id and details of the selected food
            $order_id = $_GET['order_id'];

            //Get the DEtails of the SElected Food
            $sql = "SELECT * FROM tbl_order WHERE id=$order_id";
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
                $food = $row['food'];
                $price = $row['price'];
                $qty = $row['qty'];
                $total = $row['total'];
                $order_date = $row['order_date'];
                $status = $row['status'];
                $customer_name = $row['customer_name'];
                $customer_contact = $row['customer_contact'];
                $customer_email = $row['customer_email'];
                $customer_address = $row['customer_address'];
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
        <div class="container">
            
            <form action="" method="POST" class="myForm" >
                <fieldset>
                    <legend>Order Details</legend>
                    
    
                    <div class="food-menu-desc">
                        <h5>Food name :<?php echo $food; ?></h5>
                        <h5>Customer name :<?php echo $customer_name; ?></h5>
                        <h5>Total price :$<?php echo $total; ?></h5>
                        
                    </div>

                    <tr>                   
                            <td>Food Quantity :<?php echo $qty; ?></td>
                            <br>
                            
                            <td>Time :<?php echo $order_date; ?></td>
                            <BR>

                            <td>Order status :
                                <?php 
                                    // Ordered, On Delivery, Delivered, Cancelled
                                    if($status=="Ordered")
                                    {
                                        echo "<label>$status</label>";
                                    }
                                    elseif($status=="On Delivery")
                                    {
                                        echo "<label style='color: orange;'>$status</label>";
                                    }
                                    elseif($status=="Delivered")
                                    {
                                        echo "<label style='color: green;'>$status</label>";
                                    }
                                    elseif($status=="Cancelled")
                                    {
                                        echo "<label style='color: red;'>$status</label>";
                                    }
                                ?>
                            </td>                           
                            <td>Customer contact :<?php echo $customer_contact; ?></td>
                            <br>
                            <td>Customer Address :<?php echo $customer_address; ?></td>
                            <td style="width: 450px; height: 450px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&h1=es;z=14&output=embed' style="width:100%; height=100%;"></iframe> </td>                                       
                        </tr>
                </fieldset>
            </form>
        </div>
    </section>
 











