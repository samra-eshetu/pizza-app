<?php
//connect to database
$conn = mysqli_connect('localhost', 'samra', '2334', 'samra pizza');

// check the connection
if (!$conn) {
    echo 'Connection error:' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html>
<?php
include('templates/header.php');
include('templates/footer.php');
?>



</html>