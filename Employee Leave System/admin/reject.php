<?php
    include 'inc/config.php'; 
    if (isset($_POST['reject'])){
        $appid = $_POST['appid'];
        $sql = "UPDATE leaves SET status='2' WHERE id = '$appid'"; // Assuming status '2' means rejected
        $run = mysqli_query($con, $sql);
        if ($run == true) {
            echo "<script> 
                    alert('Application Rejected');
                    window.open('dashboard.php','_self');
                  </script>";
        } else {
            echo "<script> 
                    alert('Failed To Reject');
                  </script>";
        }
    }
?>