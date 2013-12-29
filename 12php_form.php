<?php
    $name=$email=$comment=$gender="";

    if ($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $comment=$_POST["comment"];
        $gender=$_POST["gender"];
    }
?>
<html>
<head>

</head>
<body>
    <?php echo date("D-M-Y"); ?>
    <?php echo date(" h:i A"); ?>

    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
        Name:<input type="text" name="name" placeholder="Enter your name" required=""><br>
        Email:<input type="email" name="email" placeholder="Enter your e-mail" required=""><br>
        Comment:<textarea name="comment" rows="4" cols="35" placeholder="Your comment goes here"></textarea><br>
        Gender:<input type="radio" name="gender" value="Male" >Male
               <input type="radio" name="gender" value="Female">Female<br>
        <input type="submit" name="submit" value="Send">


    </form>
    Name:<?php echo $name."<br>"; ?>
    Email:<?php echo $email."<br>" ?>
    Comment:<?php echo $comment."<br>" ?>
    Gender:<?php echo $gender."<br>" ?>


</body>

</html>