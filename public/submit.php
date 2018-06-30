<?php
require_once "../include/config.php";
require_once "../include/ShortUrl.php";

if ($_SERVER["REQUEST_METHOD"] != "POST" || empty($_POST["url"])) {
    header("Location: shorten.html");
    exit;
} 

try {
    $pdo = new PDO(DB_PDODRIVER . ":host=" . DB_HOST . ";dbname=" . DB_DATABASE,
        DB_USERNAME, DB_PASSWORD);
}
catch (\PDOException $e) {
    header("Location: error.html");
    exit;
}

$shortUrl = new ShortUrl($pdo);
try {
    $code = $shortUrl->urlToShortCode($_POST["url"]);
}
catch (\Exception $e) {
    header("Location: error.html");
    exit;
}
$url = SHORTURL_PREFIX . $code;

echo <<<ENDHTML
<html>
 <head>
  <title>URL Shortener</title>
 </head>
 <body>
  <p><strong>Short URL:</strong> <a href="$url">$url</a></p>
 </body>
</html>
ENDHTML;
