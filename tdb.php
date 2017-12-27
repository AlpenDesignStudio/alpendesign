<?php
include "check.php";

if(isset ($_GET['name'])  &&  !empty($_GET['url']))
{

      $postImageName = ($_GET['name']) ;
      $postImageUrl = ($_GET['url']) ;
      $postImageExt = ($_GET['ext']) ;

      $postImageName = str_replace (" ","",$postImageName) ;
      @$rawImage = file_get_contents ($postImageUrl) ;
      if($rawImage)
    {

              

              file_put_contents("pics/".$postImageName.$postImageExt,$rawImage) ;
              echo "Image Saved!";


                $query = mysqli_query($con,"INSERT INTO pic (name,url,type) VALUES ('$postImageName','$postImageUrl','$postImageExt')");


          // $query = mysql_query("INSERT INTO pic (name,url,type) VALUES ('".$postImageName."','".$postImageUrl."','".$postImageExt."')");
               
          if($query){
            echo "image upload !";
            // header('Location: http://localhost/AlpenDesign/search_tool.php');
          }else{
            echo "Error while upload !";
          }
    }else{
        echo "Oops Something Went Wrong!";
    }
    
}

?>﻿

  