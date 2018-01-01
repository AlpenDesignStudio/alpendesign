<html>
<head></head>
<body bgcolor="aabbcc">
<?php
  
    include('check.php');

       
        // $status = $_POST['status'];
        $dpt = $_POST['dpt'];
        $pass = $_POST['password'];
        $FirstName = $_POST['fname'];
        $LastName = $_POST['lname'];
        $email = $_POST['email'];
        $Town = $_POST['town'];
        $State = $_POST['state'];
        $country = $_POST['country'];
        $Sex = $_POST['sex'];
        $DateOfBirth = $_POST['dob'];
        $dt = date('Y-m-d H:i:s');
        
       // password encrypt using SHA256();
        $password = hash('sha256', $pass);

      $query=mysqli_query($con,"INSERT INTO ar_visitor 
      (dpt,password,fname,lname,email,town,state,country,sex,dob,pic,added_on,updated_on)VALUES(".$dpt.",'".$password."','".$FirstName."','".$LastName."','".$email."','".$Town."','".$State."','".$country."','".$Sex."','".$DateOfBirth."','".$dt."','".$dt."')");





$last_id =mysqli_insert_id($con);

    $query1=mysqli_query($con,"INSERT INTO ar_login 
      (dpt,email,password,visitor_id,status,start_time,end_time)
   values
   ('".$dpt."','".$email."','".$password."','".$last_id."',1,'".$dt."','".$dt."')");


$data  = ($query)?  true : die(mysqli_error());
$data1 = ($query1)? true : die(mysqli_error());

 //to insert input records into a table - address


$queryy=mysqli_query($con,"select * from ar_visitor where email='$email' "); // Fetch all the records from the table address

?>
<h3> Page to display the stored data </h3>
 
<table border="1">
<thead>
<th> ID </th>
<th>Password </th>
<th> First Name</th>
<th>  Last Name</th> 
<th> Email</th>
<th> Town </th>
<th> State </th>
<th> Country </th> 
<th>Sex</th>
<th> Date Of Birth </th>
<th> Start Time</th>
<th>  End Time</th> 

 </thead>
 <?php

while($data = mysqli_fetch_array($queryy))
{
// we are running a while loop to print all the rows in a table
echo'<tr>'; // printing table row
echo '<td>'.$data['visitor_id'].'</td>
      <td>'.$data['password'].'</td>
      <td>'.$data['fname'].'</td>
      <td>'.$data['lname'].'</td>
      <td>'.$data['email'].'</td>
      <td>'.$data['town'].'</td>
      <td>'.$data['state'].'</td>
      <td>'.$data['country'].'</td>
      <td>'.$data['sex'].'</td>
      <td>'.$data['dob'].'</td>
      <td>'.$data['added_on'].'</td>
      <td>'.$data['updated_on'].'</td>'; // we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row
}

echo '</table>';  //closing table tag

 mysqli_free_result($queryy);
mysqli_close($con);


 ?>

</table>

</body>

<?php // header('Location: reg.php?vid='.$last_id.'&dpt='.$dpt.'&uname='.$userName); ?>
<?php  header ('Location: sign-in.php?&password='.$password.'&email='.$email); ?>
</html>

   
