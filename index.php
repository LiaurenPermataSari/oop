<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php  
        include 'animal.php';
        $sheep = new Animal("shaun");
        echo $sheep->name."<br>"; // "shaun"
        echo $sheep->legs."<br>"; // 2
        echo $sheep->cold_blooded."<br>","<br>"; // false

        echo $sheep->get_name()."<br>"; // "shaun"
        echo $sheep->get_legs()."<br>"; // 2
        echo $sheep->get_cold_blooded()."<br><br>"; // false

        include 'ape.php';
        $sungokong = new Ape("kera sakti");
        $sungokong->yell(); // "Auooo"

        include 'frog.php';
        $kodok = new Frog("buduk");
        $kodok->jump(); // "hop hop"
    ?>
</body>
</html>