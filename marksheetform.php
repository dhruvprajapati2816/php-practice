<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action = "marksheet.php">
        Name: <input type = "text" name = "name" placeholder = "Enter your name" autocomplete = "off" required><br>
        Roll No: <input type = "text" name = "rollno" placeholder = "Enter your roll number" autocomplete = "off" required><br>
        maths Marks: <input type = "number" name = "math" placeholder = "Enter marks for maths" autocomplete="off" required><br>
        science Marks: <input type = "number" name = "sci" placeholder = "Enter marks for science" autocomplete="off" required><br>
        english Marks: <input type = "number" name = "eng" placeholder = "Enter marks for english" autocomplete="off" required><br>
        <input type = "submit" value = "Submit">
        <input type = "reset" value = "Reset">
    </form>

</body>
</html>