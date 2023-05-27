<?
session_start();
$connect = new PDO("mysql:host=LetsDoLaravel; dbname=laratry; charset=utf8",'root','');

$postid = (int)$_GET['post'];
$userid = (int)$_SESSION['userid'];
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
            <div class="post-form">
            	<h1>Изменение записи</h1>
                <form action="system/postedit.php" method="POST">

                	<h3>Заголовок</h3>
                	<input class="post-title" type="text" name="title" placeholder="Заголовок" autofocus>
                    <h3>Запись</h3>
                    <textarea name="text" type="textarea" class="post" placeholder="Текст поста"></textarea>
                    <input type="text" name="idd" value="<?=$postid?>">
                    <input type="submit" class="submit" value="Изменить запись">

                </form>
            </div>
        </div>

    </main>
	
</body>
</html>