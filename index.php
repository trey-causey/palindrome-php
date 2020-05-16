<?php
require __DIR__ . '/vendor/autoload.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Find a webpage and copy/paste the URL below</h2>
<form action="/../palindrome/src/app/solution.php" method="post">
    Enter URL: <input type = "text" name = "theURL" size="50"/>
    <br>
    <input type = "submit" name = "submit" value = "Submit" />
</form>
<h3>It might be useful to got to <a href="https://en.wikipedia.org/wiki/Special:Random" >This random Wikipedia page</a> or use <a href="https://en.wikipedia.org/wiki/Special:LongPages" >This dedicated log page link </a> to find extra long pages</h3>
</body>
</html>