<!--footer-->
<footer id="footer" class="bg-white my-5 mx-3">
  <div class="container-xxl">
    <div class="row justify-content-between oafa">
      <div class="col  col-lg-6 card1">
          <h3 class="display-4 contact">Keep In Touch...</h1>
            <ul class="my-4">
              <li> Mainpage <a href="#">www.example.org</a></li>
              <li>Email <a href="#">joe@example.com</a></li>
            </ul>
            <ul class="list-inline mx-3">
            <li class="list-inline-item "><a href="#"><i class="fa-brands fa-facebook media"></a></i></i></li>
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-instagram media"></a></i></i></li>
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter media"></a></i></i></li>
          </ul>
        </div >
         
        
        <div class ="col col-lg-6 card1 mt-3 contact">
          <h3>We always listen your voice..</h3>
         <form action ="index.php" method ="POST" id ="invalid" >
          <div class="input-group mb-3  w-75 ">
         <span class="input-group-text fw-bold border-2 " id="basic-addon1">Name</span>
         <input type="text" class="form-control border-2" placeholder="" aria-label="Name" aria-describedby="basic-addon1" name="name" value="<?php echo $username ?>">
         </div>
 <div class = "text-danger mb-3 fw-bold"><?php echo $errors["username"];?></div>
        <div class="input-group  w-75 ">
         <span class="input-group-text fw-bold border-2 " id="basic-addon1">Email:</span>
         <input type="text" class="form-control border-2" placeholder="" aria-label="Email" aria-describedby="basic-addon1" name="email" value="<?php echo $email ?>">
         </div>
<div class = "text-danger mb-3 fw-bold"><?php echo $errors["email"];?></div>
        <div class="input-group w-75">
         <span class="input-group-text border-2 fw-bold">Feedback</span>
           <textarea class="form-control border-2 textarea" aria-label="Feedback" name="feedback" value="<?php echo $feedback ?>"></textarea>
         </div>
<div class = "text-danger mb-3 fw-bold"><?php echo $errors["feedback"];?></div>
         <button type="submit" name="submit" value="submit" class="btn btn-primary mt-3">Submit</button>

         </form>      
    </div>
  </footer>