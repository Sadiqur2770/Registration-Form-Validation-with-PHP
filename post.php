<?php 
$name = $_POST["fname"];
$email = $_POST["email"];
$password = $_POST["password"];
$upper = preg_match("@[A-Z]@", $password);
$lower = preg_match("@[a-z]@", $password);
$digit = preg_match("@[0-9]@", $password);
$splchar = preg_match("@[!, #, $, %, ^, &, *]@", $password);
$retypepassword = $_POST["repassword"];
$phone = $_POST["phone"];
$birth = $_POST["birth"];
$country = $_POST["country"];
$gender = $_POST["gender"];
$message = $_POST["message"];
$hobbies = $_POST["hobbies"];
$after_implod = implode(",",$hobbies);
$terms = $_POST["terms"];

if(empty($name)){
    $err = "Please Input Your Name!";
    header("location:registration.php?name_err=".$err);
}
else if(strlen($name) > 20){
    $err = "Your Name is too Long!";
    header("location:registration.php?name_err=".$err); 
}
else if(empty($email)){
    $err = "Please Input Your Email Address!";
    header("location:registration.php?email_err=".$err);
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $err = "Please Input Right Format Email!";
    header("location:registration.php?email_err=".$err);
}
else if(empty($password)){
    $err = "Please Input Your Password!";
    header("location:registration.php?pass_err=".$err);
}
else if(!$upper || !$lower || !$digit || !$splchar || strlen($password) < 8){
    $err = "Password must be one uppercase, lowercase, digit, special charecter and must be 8 charecters!";
    header("location:registration.php?pass_err=".$err);
}
else if($password != $retypepassword){
    $err = "Retype Password and Password doesn't match!";
    header("location:registration.php?repass_err=".$err);
}
else if(empty($phone)){
    $err = "Please Input Your Phone Number!";
    header("location:registration.php?phone_err=".$err);
}
else if(strlen($phone) > 14){
    $err = "Please Input Your Right Phone Number!";
    header("location:registration.php?phone_err=".$err);
}
else if(empty($birth)){
    $err = "Please Input Your Date of Birth!";
    header("location:registration.php?birth_err=".$err);
}
else if(empty($country)){
    $err = "Please Input Your Country Name!";
    header("location:registration.php?country_err=".$err);
}
else if(empty($gender)){
    $err = "Please Input Your Gender!";
    header("location:registration.php?gender_err=".$err);
}
else if(empty($message)){
    $err = "Please Input Your Message Here!";
    header("location:registration.php?message_err=".$err);
}
else if(str_word_count($message) > 30){
    $err = "Please Input Your Message Within 30 words!";
    header("location:registration.php?message_err=".$err);
}
else if(empty($hobbies)){
    $err = "Please Input Your Hobbies!";
    header("location:registration.php?hobbies_err=".$err);
}
else if(empty($terms)){
    $err = "Please give a tik mark on terms and condition!";
    header("location:registration.php?terms_err=".$err);
}
else{
    echo "Name: ". $name;
    echo "<br>";
    echo "Email: ". $email;
    echo "<br>";
    echo "Your Password: ". $password;
    echo "<br>";
    echo "Phone Number: ". $phone;
    echo "<br>";
    echo "Date of Birth: ". $birth;
    echo "<br>";
    echo "Country: ". $country;
    echo "<br>";
    echo "Gender: ". $gender;
    echo "<br>";
    echo "Message: ". $message;
    echo "<br>";
    echo "Hobbies: ". $after_implod;
    echo "<br>";
    echo "Terms & Condition: ". $terms;
}
?>