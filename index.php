<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
    <div class="container">
        <form action="connect.php" method="post">
            <h1>Signup Form</h1><br>
            <div>
                <label>First name : </label>
                <input type="text" name="fname" placeholder="Enter your first name.">
            </div><br>
            <div>
                <label>Last name : </label>
                <input type="text" name="lname" placeholder="Enter your last name.">
            </div><br>
            <div>
                <label>Mobile Number : </label>
                <input type="number" name="mobile" placeholder="Enter your mobile number.">
            </div><br>
            <div class="gender">
                <label>Gender : </label>
                <input type="radio" class="gender1" name="gender" value="m">Male
                <input type="radio" class="gender1" name="gender" value="f">Female
                <input type="radio" class="gender1" name="gender" value="o">Other
            </div><br>
            <div>
                <label>Password : </label>
                <input type="password" name="pass" placeholder="Enter your password.">
            </div><br>
            <div class="buttons">
                <button class="regButton" (click)="onRegister()">Register</button>
            </div>
        </form>
    </div>

    <!-- <script type="text/javascript" src="main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>