<?
session_start();
$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');

$userid = (int)$_SESSION['userid'];

$userid = $_SESSION['userid'];

$messages = $connect->query("SELECT * FROM posts WHERE id IN ('$userid')");
$users = $connect->query("SELECT * FROM users WHERE NOT id IN ('$userid')");
$users = $users->fetchall();
if ($_SESSION['userid']){
    
}else{
    header("location: index.php");
}
$posts = $connect->query("SELECT * FROM posts");
$profuserid = (int)$_GET['user'];
$profileData = $connect->query("SELECT * FROM users WHERE id IN ('$userid')");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Laratry</title>
</head>
<body>
	
	<header>
        <p><i>НаВстречу</i></p>
        <a href="page.php" class="logo"><img src="img/logo.png" alt="logo"></a>
        <?
            $profileData = $connect->query("SELECT * FROM users WHERE id IN ('$userid')");
            foreach($profileData as $prof){ ?>
            <div class="nav_right">
                <a href="profile.php?user=<?=$userid?>" class="pfp">
                    <img src="<?=$prof['avatar']?>" alt="#">
                </a>
                <div class="options">
                    <a href="profile.php?user=<?=$userid?>">Профиль</a>
                    <a href="system/logout.php">Выйти из аккаунта</a>
                </div>
            </div>
        <? } ?>
    </header>

    <main>
        
        <div class="container">
            
            <div class="profile_right">

                <a class="new_record" href="addpost.php">Новая запись</a>

                <? 
                    foreach($posts as $post){
                ?>
                <div class="post_block">
                    <? 
                        $author = $post['id_author'];
                        $authorData = $connect->query("SELECT * FROM users WHERE id IN ('$author')");
                        foreach($authorData as $authorEl){{}
                    ?>
                        <a href="profile.php?user=<?=$authorEl['id']?>">
                        <img src="<?=$authorEl['avatar']?>" alt="">
                        </a>
                    <?}?>
                    <? if($userid == $profuserid){?>
                    <a class="deletion" href="system/postdelete.php"><img src="img/delete.png" alt="delete"></a>
                    <?}?>
                    <div class="post_info">
                        <h1><?=$authorEl['nickname']?></h1>
                        <h3><i><?=$post['title']?></i></h3>
                        <p><?=$post['text']?></p>
                        <p><?=$post['data']?><p>
                    </div>
                </div>
                <? }?>
            </div>
        </div>
    </main>

</body>
</html>

