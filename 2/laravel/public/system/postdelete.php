<?

$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');

session_start();

$author = $_SESSION['userid'];
$post = $_GET['post'];

$connect->query("DELETE FROM `posts` WHERE `posts`.`id` = $post");

header("location: ../profile.php?user=$author");
?>