<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/13/19
 * Time: 9:46 AM
 */
if (isset($_POST['id'])){
    extract($_POST);
    $conn= mysqli_connect("localhost", "root", "", "safari");
    $update=mysqli_query($conn, "UPDATE `majina` SET `jina`='$name',`Afara`='$email',`Siri`='$pass' WHERE id=$id");
    header("location:viewUsers.php");
}

?>