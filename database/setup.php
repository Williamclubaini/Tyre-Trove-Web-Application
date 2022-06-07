<link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
  if($_GET["action"] == "setup"){

  //Create database
  $sql = "CREATE DATABASE `tyretrove`";
  $conn->query($sql);
  $conn = mysqli_connect("localhost","root","","tyretrove");

  $sql= " CREATE TABLE `about_tbl` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `about_us` varchar(500) NOT NULL,
     PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);


  $sql= " INSERT INTO `about_tbl` (`id`, `about_us`) VALUES
  (1, 'We are a trusted supplier and distributor of Motorcycles, different brands of Tyres and Motor vehicle accessories as well as operating a Tyre Fitment Centre where we offer Tyre fitting, Wheel Balancing and Wheel Alignment and furthermore, provide servicing of Motor vehicles and Motorcycles with genuine service and spare.\r\n\r\nWe provides its services to different organizations, both private and public and is well known for our inclusive pricing structure.')";
  $conn->query($sql);

  $sql= " CREATE TABLE `appointments_tbl` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `user_id` int(10) NOT NULL,
    `vehicle` varchar(50) NOT NULL,
    `visit_day` varchar(13) NOT NULL,
    `servicing` varchar(255) NOT NULL,
    `problem` varchar(255) NOT NULL,
    `status` varchar(10) NOT NULL,
    `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);


  $sql= "CREATE TABLE `contact_us_tbl` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `fullname` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `subject` varchar(50) NOT NULL,
    `message` varchar(255) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "CREATE TABLE `loginattempts_tbl` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `attempt` int(4) NOT NULL,
      PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);


  $sql= "CREATE TABLE `products_tbl` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `image` varchar(255) NOT NULL,
    `name` varchar(128) NOT NULL,
    `price` double(10,2) NOT NULL,
    `quantity` int(13) NOT NULL,
     PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);


  $sql= "INSERT INTO `products_tbl` (`id`, `image`, `name`, `price`, `quantity`) VALUES
  (1, '1.png', 'VX Car Fan', 800000.00, 16),
  (2, '2.png', 'Oil Pipes', 875000.00, 15),
  (3, '8.png', 'Yamaha motorcycle', 520000.00, 499),
  (4, '13.png', 'Battery 21VH', 400000.00, 9),
  (5, '10.png', 'Generator', 600000.00, 500),
  (6, '5.png', 'Hilux Brakes', 450000.00, 99),
  (7, '4.png', 'Vida HV Benz Car-brakes', 700000.00, 10),
  (8, '12.png', 'White small battery', 520000.00, 13)";
  $conn->query($sql);


  $sql= "CREATE TABLE `purchase_records_tbl` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `user_id` int(10) NOT NULL,
    `product_name` varchar(50) NOT NULL,
    `price` double(10,3) NOT NULL,
    `quantity` int(13) NOT NULL,
    `cost` double(10,2) NOT NULL,
    `payment_method` varchar(20) NOT NULL,
  `credit_card_name` varchar(50) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
    `cardNumber` varchar(255) NOT NULL,
    `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
     PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);



  $sql= "CREATE TABLE `shipping_tbl` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `customer_id` int(10) NOT NULL,
    `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
    `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "CREATE TABLE `faq_tbl` (
    `id` int(20) NOT NULL AUTO_INCREMENT,
    `question` varchar(255) NOT NULL,
    `answer` varchar(355) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4";
  $conn->query($sql);

  $sql= "INSERT INTO `faq_tbl` (`id`, `question`, `answer`)
  VALUES 
  (1, 'What are other functions of users for this application?',
      'Users can be able to create their own account, can be able to change password and delete their account.'
    ),
    (
      2,
      'Is my sensitive data secure?',
      'Our users are allowed to use strong and unique passwords and registration will take place: \r\nthis will help to prevent hackers from hacking users account and also hard to easily access users account. We also use Password encryption to completely block hackers from cracking this passwords. Our methods of password encryption will remain undisclosed.'
    ),
    (
      3,
      'What are payment methods Tyre Trove offers?',
      'All our payment that are offered are elaborated in the following page <b>Features > payment methods </b> in our website\'s footer. Please click the link to see our payment methods.'
    ),
    (
      4,
      'Can I be able to buy two or more items at a time?',
      'We are using a shopping cart system which give you the ability to add more and more items in it without limit.'
    ),
    (
      5,
      'Is it safe to come directly and purchase to us?',
      'This question is not answered yet. Please bear with us will soon reply to this question'
    ),
    (
      6,
      'What are other functions of users for this application?',
      'This question is not answered yet. Please bear with us will soon reply to this question'
    )";
  $conn->query($sql);




$sql="CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(10) NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
 $conn->query($sql);

$sql= "INSERT INTO `users_tbl` (`id`, `firstname`, `lastname`, `contact`, `email`, `location`, `password`, `usertype`, `registerDate`) 
VALUES
(1, 'Admin', 'Account', '+265992263424', 'admin@gmail.com', 'Blantyre', '66ae5e9d7811b5d3c80cd16e95870c01', 0, '2022-03-06 12:50:48');";

if ($conn->query($sql)) {
    header("location:../index.php");
} else {
    echo "Something's Wrong";
}
}
}

?>
<div class="px-4 py-5 my-5 text-center">
    <div class="col-lg-6 mx-auto">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a type="button" href="setup.php?action=setup" class="btn btn-primary btn-lg px-4 me-sm-3">CREATE
                DATABASE</a>
        </div>
    </div>
</div>