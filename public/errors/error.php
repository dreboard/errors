<?php
var_dump(http_response_code(), $_SERVER['REDIRECT_STATUS']);
$status = $_SERVER['REDIRECT_STATUS'];
$codes = [
    400 => ['400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'],
    403 => ['403 Forbidden', 'The server has refused to fulfil your request.'],
    404 => ['404 Not Found', 'The page you requested was not found on this server.'],
    405 => ['405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'],
    408 => ['408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'],
    500 => ['500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'],
    502 => ['502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'],
    504 => ['504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'],
];
$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Please supply a valid HTTP status code.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?> Error Page</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104186490-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-104186490-2');
        gtag('event', 'error', { method : '<?php echo $title;?>' });
    </script>
</head>

<body>
<?php
echo '<h1>Hold up! '.$title.' detected</h1>
<p>'.$message.'</p>';
?>
<script>
    function () {
        var content = document.body.innerText;
        var query="500 Internal Server Error";
        if (content.search(query) > -1 ) {
            return true;
        } else {
            return false;
        }
    }
    console.log(document.referrer);
</script>
</body>
</html>