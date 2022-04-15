<?php

require('config/db_connect.php');

$sql = 'SELECT * FROM reviews';
$result = mysqli_query($conn,$sql);
$reviews = mysqli_fetch_all($result,MYSQLI_ASSOC);
// mysqli_free_result($conn,$reviews);
mysqli_close($conn);
?>

<?php require('components/header.php');?>


<?php require('components/second-nav.php');?>

<!--review blogs-->

   <?php foreach($reviews as $review){ ?>
    <div class="container-sm">
   
     <div class="m-3 bg-light p-2">
     <div class="fs-3"><h5 class="mx-2"><i class="bi bi-person-circle me-1"></i><?php  echo $review['username'] ;?></h5></div>
     <p class="review m-4"><?php  echo $review['feedback'] ;?></p>
   
   
        <div class="d-flex justify-content-around mt-4">
          <a href="" class="text-dark"><i class="fa-solid fa-heart fs-6"><span class="ms-2 fs-6">0</span></i></a>
   
           <a href="" class="text-dark"><i class="fa-solid fa-message fs-6"><span class="ms-2 fs-6">0</span></i></a>
           <a href="" class="text-dark"><i class="fa-solid fa-plus fs-6"><span class="ms-2 fs-6">A d d</span></i></a>
        </div>
   
   </div>
   
    </div>
   <?php }?>




<?php require('components/slogan.php');?>


