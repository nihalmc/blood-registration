<?php 
session_start(); 
require 'dbcon.php';

if(isset($_POST ['donor_delete']))
{
    $donor_id =mysqli_real_escape_string($con,$_POST['donor_delete']);

    $query = "DELETE FROM donors WHERE id='$donor_id' ";
    $query_run =mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Donor Deleted Successfully";
        header("Location:index.php");
        exit(0);
    } 
    else
    {
        $_SESSION['message']="Donor Not Deleted";
        header("Location:index.php");
        exit(0);
        
    }
}

if(isset($_POST['update_donor']))
{
   
 $donor_id =mysqli_real_escape_string($con,$_POST['donor_id']);

 $name =mysqli_real_escape_string($con,$_POST['name']);
  $address =mysqli_real_escape_string($con,$_POST['address']);
  $bloodgroup =mysqli_real_escape_string($con,$_POST['bloodgroup']);
  $phone =mysqli_real_escape_string($con,$_POST['phone']);
  $date =mysqli_real_escape_string($con,$_POST['date']);




$query = "UPDATE donors SET name='$name',address='$address' ,bloodgroup='$bloodgroup', phone='$phone',date='$date' WHERE id='$donor_id'";

$query_run =mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['message']= "Donor Update Successfully";
    header("Location: index.php");
    exit(0);
}
else
{
    $_SESSION['message']= "Donor Not Update";
    header("Location: index.php");
    exit(0);
}

}


if(isset($_POST['save_donor'])){

  $name =mysqli_real_escape_string($con,$_POST['name']);
  $address =mysqli_real_escape_string($con,$_POST['address']);
  $bloodgroup =mysqli_real_escape_string($con,$_POST['bloodgroup']);
  $phone =mysqli_real_escape_string($con,$_POST['phone']);
  $date =mysqli_real_escape_string($con,$_POST['date']);

$query ="INSERT INTO donors(name,address,bloodgroup,phone,date)
 VALUES('$name','$address','$bloodgroup','$phone','$date')";

$query_run= mysqli_query($con, $query);

if($query_run)
{   
    $_SESSION['message']= "Donor Created Successfully";
    header("Location: donor-create.php");
    exit(0);
          
        }
        else
        {
            $_SESSION['message'] = "Donor Not Created";
            header("Location: donor-create.php");
            exit(0);
        } 

}

?>
