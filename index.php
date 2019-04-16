<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP: Getting a value from the URL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h1><?php echo "Hello, " . htmlspecialchars($_GET['name'])  ;?></h1>

    <p>The code above looks like this</p>
    <code>echo "Hello, " . htmlspecialchars($_GET['name']) ;?> </code>
    <p>Where we get a value from the URL through <code>$_GET</code>, <em>An associative array of variables passed to the
            current script via the URL parameters (aka. query string). Note that the array is not only populated for GET
            requests, but rather for all requests with a query string.</em></p>
    <p><code>htmlspecialchars</code> is here to sanitize what we're passing on the page.</p>

</body>

</html>