<?php
include 'purephp.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- <h1>hello world </h1>-->
    <?php // echo "<h1> Hello world</h1>"?> 
    
    <a href="example2.php">Go to form</a>

    <h2> Username: <u> <?php echo $username; ?> </u> </h2>
    <h2> User ID: <u> <?php echo $user_id; ?> </u> </h2>

    <h2> First Name: <u> <?php echo $firstname; ?></u></h2>
    <h2> Last Name: <u> <?php echo $lastname; ?></u></h2>
    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        // variable
        var username = "<?php echo $username ?>";
        var user_id = "<?php echo $user_id?>";

        var firstname = "<?php echo $firstname ?>";
        var lastname = "<?php echo $lastname ?>";
        
        // function
        function greetUser() {
            alert("Hello, " + username + ". Your ID is " + user_id +
            "\nYour name is '" + firstname + " " + lastname + "'"
            )
        }
    </script>
</body>
</html>