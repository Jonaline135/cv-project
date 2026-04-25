<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$skills = $_POST['skills'];
$education = $_POST['education'];

// Handle file upload
$photo = $_FILES['photo']['name'];
$temp = $_FILES['photo']['tmp_name'];

$folder = "uploads/" . $photo;
move_uploaded_file($temp, $folder);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="cv">
    <img src="<?php echo $folder; ?>" width="150"><br>

    <h1><?php echo $name; ?></h1>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>

    <h3>Skills</h3>
    <p><?php echo $skills; ?></p>

    <h3>Education</h3>
    <p><?php echo $education; ?></p>
</div>

</body>
</html>