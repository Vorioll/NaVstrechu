<?

$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');

session_start();

$author = $_SESSION['userid'];
$title = $_POST['title'];
$text = $_POST['text'];
$date = date("Y-m-j");

$connect->query("INSERT INTO posts (id, id_author, title, text, data) VALUES (NULL, '$author', '$title', '$text', '$date')");
header("location: ../profile.php?user=$author");
?>