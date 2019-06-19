<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <footer class="footer">
            <?php
            $ipaddress = getenv("REMOTE_ADDR");
            Echo "Your IP Address is " . $ipaddress;
            Echo " <p>Copyright &copy; Gabriel Garcia 2019.</p>";
            ?>
        </footer>
    </body>
</html>