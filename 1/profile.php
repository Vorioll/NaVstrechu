<?
session_start();
$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');
if ($_SESSION['userid']){
    
}else{
    header("location: index.php");
}
$userid = (int)$_SESSION['userid'];
$profuserid = (int)$_GET['user'];
$oprofileData = $connect->query("SELECT * FROM users WHERE id IN ('$profuserid')");
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

    <div class="container">
        
        <div class="profile_left">
            <?
                $oprofileData = $connect->query("SELECT * FROM users WHERE id IN ('$profuserid')");
                foreach($oprofileData as $oprof){ 
                $author = $oprof['id'];
            ?>
                <img src="<?=$oprof['avatar']?>" alt="avatar">
                <div class="name">
                    <h1><?=$oprof['nickname']?></h1>
                    <h3><?=$oprof['name']?> <?=$oprof['surname']?></h3>
                    <p>ID: #<?=$oprof['id']?></p>
                </div>
            <? } ?>
        </div>

        <div class="profile_right">
            <? if($userid == $profuserid){?>
                <a class="new_record" href="addpost.php">Новая запись</a>
            <?}?>
            
            <?
            $user = $_GET['user'];
            $posts = $connect->query("SELECT * FROM posts WHERE id_author IN ('$user')");

            foreach($posts as $post){
            $authorid = $post['id_author'];

            $authorposts = $connect->query("SELECT * FROM users WHERE id IN ('$authorid')");
            ?>
            <div class="post_block">
                <div class="imgs">
                    <? foreach($authorposts as $authorpost){?>
                    <img src="<?=$authorpost['avatar']?>" alt="avatar">
                <?}?>
                <? if($userid == $profuserid || $userid == 1){?>
                    <a class="deletion" href="system/postdelete.php?post=<?=$post['id']?>"><img src="img/delete.png" alt="delete"></a>
                    <a class="edit" href="editpost.php?post=<?=$post['id']?>"><img src="img/edit.png" alt="delete"></a>
                <?}?>
                </div>
                    <div class="post_info">
                        <h1><?=$authorpost['nickname']?></h1>
                        <h3><i><?=$post['title']?></i></h3>
                        <p><?=$post['text']?></p>
                        <p><?=$post['data']?></p>   
                    </div>
            </div>
        <?}?>
        </div>
    
</body>
</html>