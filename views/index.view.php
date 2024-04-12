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
    <a href="/create">create</a>
</nav>
</header>

<h1>BOOKS</h1>
    <ul>
    <?php foreach ($books as $book) { ?>
        <li> <?= $book["name"], " / ", $book["author"], " / ", $book["release_date"], " / ", $book["availability"] ?> </li>
    <?php } ?>
    </ul>
</body>
</html>