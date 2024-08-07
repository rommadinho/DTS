<!DOCTYPE html>
<html>
<head>
    <title>
        My MVC Application
    </title>
</head>
<body>
    <?php require '..App/Views/'. $View.'.php';?>
</body>
</html>
//app/Views/Home.php
<h1>
    Welcome To The Home Page
</h1>
<h2>
    Users:
</h2>
<ul>
    <?php 
    foreach ($users as $user):
    ?>
        <li>
            <?php
            echo $user['name'];
            ?>
        </li>
        <?php
        endforeach;
        ?>
</ul>
