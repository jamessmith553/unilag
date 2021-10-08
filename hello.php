<?php
        $servername ='localhost';
        $username = 'root';
        $password = '';
        $database_name='database123';

        $conn = mysqli_connect($servername,$username,$password,$database_name);

        if (!$conn) {
            die("connection failed" .mysqli_connec_error());
        }
        if (isset($_POST['btn'])) {
            $firstname = $_POST['name'];
            $password = $_POST['password'];

            $sql_query = "INSERT INTO enter_details(firstname,password)
            VALUES ('$firstname','$password')";
        
            if (mysqli_query($conn, $sql_query)) {
                echo "new details submitted successfully";
            }else {
                 echo "error " . $sql. "". mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
        
           <h2 style="color:red;">hello user</h2> 
        
        












