 <?php
$host='localhost';
$user='root';
$pwd='';
$db='task1';

$con = mysqli_connect ($host, $user, $pwd, $db);

if (mysqli_connect_errno()){
    echo mysqli_connect_errno();
    exit();
}
?>