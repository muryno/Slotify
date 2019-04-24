<?php
include "includes/header.php";

if(isset($_GET['id'])){
    $albumId= $_GET['id'];
    $albumQuery=mysqli_query($con,"SELECT * FROM albums WHERE id='$albumId'");
    while ($row= mysqli_fetch_array($albumQuery)){
        echo $row['title'];
    }

}
else{
    header("location: index.php");
}
?>
<?php

include "includes/footer.php";

