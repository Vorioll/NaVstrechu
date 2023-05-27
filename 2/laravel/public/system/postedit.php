<?

$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');

session_start();

$author = $_SESSION['userid'];
$title = $_POST['title'];
$text = $_POST['text'];
$idd = $_POST['idd'];

$connect->query("UPDATE `posts` SET `title` = '$title', `text` = '$text' WHERE `posts`.`id` = '$idd'");

header("location: ../profile.php?user=$author");
?>