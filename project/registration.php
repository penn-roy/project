<html><head>

</head>
<link rel = "stylesheet" href ="css/form.css">
<center><form action="registration.php" method="post">
        <div id="send">
            <h2>write us</h2>
        </div>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" placeholder="name" id="name" name="name" required="required"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" placeholder="email" id="email" name="email" required="required"></td>
            </tr>
            <br/>
            
            <tr>
                <td>Password:</td>
                <td><input type="Password" placeholder="password" id="password" name="password_1" required="required"></td>
            </tr>
            <br/>

             <tr>
                <td>Confirm Password:</td>
                <td><input type="Password" placeholder="password" id="password" name="password_2" required="required"></td>
            </tr>
            <br/>

            <td><button type="submit" name="submit">Log In</button></td>
        </table>

    </form></center>
    <br/>
    <?php

	include_once "config.php";
     if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql="INSERT INTO projects(name, email, password) values ('$name', '$email', '$password');";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Your Message has been successfully sent, we will review and get back to you in moment');</script>";
    }
    else
    {
       echo "ERROR:". $sql. "<br>". mysqli_error($conn);
    }
}

//validate password

if(isset($_POST['submit'])){
     $password_1 = $_POST['password_1'];
     $password_2 = $_POST['password_2'];

if($password_1==$password_2){
   $password = $password_1;
}
else{
      echo "Passwords Do not Match";
}}

    ?>
    </html>
