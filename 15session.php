<?php
session_start();
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}

#unset($_SESSION['views']
#session_destroy()

?>

<html>

<body>
    <h2>Welcome to our page</h2>
    <h4>This is for session tutorial.</h4>
    <?php echo "Number of views ".$_SESSION['views'] ?>

</body>
</html>