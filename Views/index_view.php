<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
<header>
<nav>
    <?php if(isset($_SESSION["Admin"])) { ?>
     <a href="/create">create</a> 
    <?php } ?>
    <a class=loginregister href="/register">register</a>
    <a class=loginregister href="/login">login</a>
    
    <?php if (isset($_SESSION['flash'])) { ?>
     <form action="Controllers/logout.php" method="post"> 
            <input type="submit" name="logout" value="Logout">
     </form>
<?php } ?>

</nav>
</header>

<h1>BOOKS</h1>
    <ul>
    <?php foreach ($books as $book) { ?>
        <li> <a href="/show?id= <?=$book["id"]?>">  <?= $book["name"] ?> </a> <?= " / ", $book["author"], " / ", $book["release_date"], " / ", $book["availability"] ?> </li>
    <?php } ?>
    </ul>

</body>
</html> 