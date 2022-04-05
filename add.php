 <?php 


$username=$email=$feedback='';

$errors = array('username' => '', 'email' => '', 'feedback' => '');


if(isset($_POST['submit'])){
  
    //check email
 if(empty($_POST['email'])){
     $errors['email'] = 'Email is requried!! <br/>';
    
 }else{
      $email = $_POST['email'];
     if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
     $errors['email'] = 'email must be valid!! </br>';
} 
 }



if(empty($_POST['name'])){
   $errors['username'] = 'Username is requried!! <br/>';
}else{
    $username=$_POST['name'];
    if(!preg_match('/^[a-zA-Z\s]+$/',$_POST['name'])){
    $errors['username'] = 'Username must not contain special chars!! <br/>';
     }
}
 


if(empty($_POST['feedback'])){
    $errors['feedback'] = 'feedback is requried!! <br/>';
} else {
    $feedback=$_POST['feedback'];
if (!preg_match('/^[a-zA-Z0-9\s\.]+$/',$_POST['feedback'])){
   $errors['feedback'] = 'Feedback must not contain special chars!! <br/>';
}
}

if(array_filter($errors)){
     $sss =  "<script>window.location.href='#invalid'</script>";
}else{
    header('Location:review.php');
}




}























?>