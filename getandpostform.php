<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!--
        Get: Default Method
        Data will be visible in URL
        Not Secure Method to pass Sensitive Data Liker
        Username and password.
        Used for Sorting and Searching Records
        Post: Secure
        Data hide
        Always use this method
        -->   

        <form method = "post" action = "getpostphp.php">
        no1: <input type = "text" name = "txt1" placeholder = "Enter number 1" autocomplete = "off" required><br>
        no2 : <input type = "text" name = "txt2" placeholder = "Enter number 2" autocomplete = "off" required><br>
        <input type = "submit" value = "Submit">
        </form>
        
</body>
</html>