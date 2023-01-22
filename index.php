<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="info">
        <h1>Form Connectivity with Database</h1>
    </div>
    <div class="data">
        <form method="POST" action="process.php">
            <div class="in"><div class="inText">First Name</div><div class="inText"><input class="field" type="text" name="fname"></div></div>
            <div class="in"><div class="inText">Last Name</div><div class="inText "><input class="field" type="text" name="lname"></div></div>
            <div class="in"><div class="inText">Email</div><div class="inText "><input class="field"  type="email" name="email"></div></div>
            <div class="in"><div class="inText">Password</div><div class="inText "><input  class="field" type="password" name="pass"></div></div>
            <div class="in"><div class="inText">DOB</div><div class="inText "><input class="field"  type="date" name="dob"></div></div>
            <div class="in"><div class="inText">Gender</div><div class="inText "><input class="field"  type="radio" name="gender" value="male">Male <input class="field"  type="radio" name="gender" value="female">Female</div></div>
            <div class="in"><div class="inText"></div><div class="inText "><input class="field"  type="submit" name="submit" value="submit"></div></div> 
        </form>
    </div>
</body>
</html>


