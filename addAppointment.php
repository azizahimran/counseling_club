 <?php

        if (isset($_POST['addAppointment'])){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phonumber = $_POST['phonumber'];
            $date = $_POST['date'];
            
            if (isset($_POST['user']))
            $user = $_POST['user'];
            else
            $user = "";

            if (isset($_POST['counsellor']))
            $counsellor = $_POST['counsellor'];
            else
            $counsellor = "";

            $message = $_POST['message'];

            //set database connection configuration
            include ("dbconnect.php");

            if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }
            // create SQL statement and run the query
            $sql =  "INSERT INTO appointment (fullname, email, phonumber, date, user, counsellor, message)
                     VALUES ('$fullname', '$email','$phonumber','$date', '$user', '$counsellor', '$message')";
            
            // Execute the query (the recordset $rs contains the
            
            if (mysqli_query($conn, $sql)) {
            echo "Your appointment request has been submitted successfully. Thank you!";
            } else {
            echo "Error cannot submit your appointment " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            }
            ?>