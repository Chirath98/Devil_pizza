<?php
$result = $con->query($sql);
if ($result->num_rows > 0){
    while($row =$result->fetch_assoc()) {
        if ($product_counter == 0){
            echo "<div class='row'>";
        } elseif (($product_counter % 3) == 0){
            echo"<br><p></p><br></div><div class='row'>";
        } else{}
        $product_counter ++;
        //Card Begin
        
        echo '<div class="col-md-4">';
        echo '    <div class="card" style="width: 20rem;">';
        echo '    <img src="/resources/images/food/'.$row['image_name'].'" class="card-img-top" style="height: 15vw;" alt="...">';
        echo '    <div class="card-body">';
        echo '         <h5 class="card-title text-center">'.$row['title'].'</h5>';
        echo '      <ul class="list-group list-group-flush  style="width: 19rem;">';
        echo '          <li class="list-group-item "><strong>Description:</strong><br>'.$row['descript' ].'</li>';
        echo '          <li class="list-group-item"><strong>Price: $'.$row['price'].'</strong></li>';
        echo '          <a id ="loclink" href="?page=pages/Order.php&food_id=<?php echo $uid; ?>" onclick="getLocation()" class="btn btn-primary">Order Now</a>';
        echo '      </ul>';
        echo '    </div></div></div>';
    
    }
}
echo"<br><p></p><br></div>";

?>