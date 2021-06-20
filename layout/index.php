<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="Natasya Utami">
    <meta name="keywords" content="sistem, informasi, 3">
    <title>Ujian Tengah Semester Genap 2020/2021</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    
    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/header2.jpg" alt="[IMG]">
        </header>

        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a>
            </li>
                <li><a href="index.php?page=login_form">Login</a>
            </li>
            </ul>
        </nav>

        <section>
            <?php
            if (isset($_GET['page'])) {
                include $_GET['page'] . ".php";
            } else {
                include "main_index.php";
            }

            ?>
        </section>

        <footer>
                copyright &copy; 2021
        </footer>
    </main>    
</body>
</html>