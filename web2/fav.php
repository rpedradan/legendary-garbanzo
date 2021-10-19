<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       if ($_POST['username'] && $_POST['dish']){
            
            $username = htmlentities ($_POST['username']);
            $color = $_POST['color'];
            $dish = htmlentities ($_POST['dish']);

            echo "Thanks for your selection, {$username}.".'<br>'."You really enjoyed your {$dish} - especially with a nice {$color} wine.";
        } else {
            echo "Missing details. Please fill out the form completely.";
        } 
    ?>
</body>
</html>