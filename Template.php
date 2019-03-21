<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="banner">
        
        </div>

        <nav id="navigation">
            <ul id="nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="Coffee.php">Coffee</a>
                </li>
                <li>
                    <a href="">Shop</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
            </ul>
        </nav>

        <div id="content_area">
            <?php echo $content; ?>
        </div>

        <div id="sidebar">
        
        </div>

        <footer>
            <p>All rights reserved</p>
        </footer>
    </div>
</body>
</html>