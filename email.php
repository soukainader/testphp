<?php

if(isset($_GET['submit'])){
echo "hello";  
$from = 'From: yoursite.com'; 
$to = 'soukainader99@gmail.com'; 
$subject = 'Customer Inquiry';
$body = "hello everybody";
mail($to, $subject, $body);
}else{
    echo "bye";
}
?>