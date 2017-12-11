<?php  

if(isset($_GET['cible']) && $_GET['cible']=="modi") {  

            
            $con=mysqli_connect("localhost","root","root","smartpanel"); 
            $USER = $_SESSION['User_Id'];

            $fullname= $_POST['Fullname'];
            $Password=md5($_POST['Password']);
            $Address=$_POST['Address'];

            $result_1=mysqli_query($con,"UPDATE user SET Fullname='$fullname' WHERE User_Id = '$USER'");
            $result_2=mysqli_query($con,"UPDATE user SET Password='$Password' WHERE User_Id = '$USER'");
            $result_3=mysqli_query($con,"UPDATE appartment SET Address='$Address' WHERE User_Id = '$USER'");
            
            include("gabarit.php");

            /*
            if($result_1||$result_2||$result_3){  
            echo "<script> alert('Succeed！'); </script>";  
            echo "<meta http-equiv='Refresh' content='0;URL=$url'>";  
        }else{  
            echo "<script> alert('Failed！'); </script>";  
        }  */

    }
    

?>