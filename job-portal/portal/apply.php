<?php 
    $connection=mysqli_connect('localhost','root','','job-portal');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pweb=$_POST['pweb'];
    $file=$_POST['file'];
    $cletter=$_POST['cletter'];

    
    $status=mysqli_query($connection,"insert into apply(name, email, pweb, file, cletter) values('$name','$email','$pweb','$file','$cletter')");

if($status)
{
    echo"Registration Successful";
    header("location:index.html");
}
else
{
    echo"Error in SQL";
    echo mysqli_error($conn);
}
?>