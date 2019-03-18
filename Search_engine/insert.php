<?php


          $dbName="search"; 

    // $dbName="search"; 
   $db = mysqli_connect('localhost','root','',$dbName);
    // mysqli_select_db($db,'search');
// $site_id = mysqli_real_escape_string($db, $_SESSION['site_id']);
   $sql = "";
    if(isset($_POST['site_title'])){

      $site_title = $_POST['site_title'];
      $site_link = $_POST['site_link'];
      $site_keywords = $_POST['site_keywords'];
      $site_desc = $_POST['site_desc'];
      $site_image = $_FILES['site_image']['name'];
      $site_image_tmp = $_FILES['site_image']['tmp_name'];
      
      
      
      $sql = "INSERT INTO sites (site_title,site_link,site_keywords,site_desc) VALUES ('".$site_title."','".$site_link."','".$site_keywords."','".$site_desc."');";
      echo $sql;
      move_uploaded_file($site_image_tmp,"images/{$site_image}");
      // header('Location: insert_site.php');
      

      if (!mysqli_query($db,$sql)){
        die('error inserting data');
      }
    }
    
          header('Location: insert_site.php');

    



?>