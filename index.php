<?php include "includes/header.php"; ?>

<h1 id="pageHeadingBig1" >You might also like this</h1>

<div class="gridViewContainer">
    <?php
    $salbumquery = mysqli_query($con,"SELECT * FROM albums order BY RAND() LIMIT 10");
    while ($row = mysqli_fetch_array($salbumquery)){
        echo  "<div class='gridItemView'>
         <a href='album.php?id=". $row['id']." '>
           <img src=". $row['artworkPath']." />       
               <div class='gridViewInfo'>
             " . $row['title']. " 
              </div>
              
              </a>
              </div>
              ";

    }
    ?>
</div>
<?php include "includes/footer.php" ?>
