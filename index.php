<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // include 'joint.php';
    $server ="localhost";
$username ="root";
$password ="";


$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
 echo "Success connecting to the db";
    $name = $_POST['name'];
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $massege = $_POST['massege'];
    $sql = "INSERT INTO `form`.`tabel` ( `name`,`id`,`phone`, `website`,`massege`) VALUES ('$name','$id','$phone','$website','$massege');";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
    <form action="form.php" method="post">
    <div class="form">
        <div class="container">
        <h3>Send Us a Massage</h3><hr>
            <input type="text" id="text" name="text" placeholder="Enter your Name">
            <input type="email" id="email" name="email" placeholder="Enter your email"><br>
            <input type="number" id="number" name="number" placeholder="Enter your number">
            <input type="website" id="website" name="website" placeholder="Enter your website"><br>
            <textarea name="Massage" id="Massage" cols="80" rows="10" placeholder="Enter your Massage"></textarea><br>
            <button>Send Massage </button>
             </form>
        </div>
    </div>
</body>
</html>
