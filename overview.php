<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

    <h1>Goodcard - track your collection of Pokémon cards</h1>

    <ul>
        <?php foreach ($cards as $card) : ?>
            <li><?= $card['name'] ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter new pokemon">
        <input type="submit" value="Add" name="submit">
        
    </form>
</body>
</html>