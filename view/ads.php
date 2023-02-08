<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta.php') ?>
    <title>Advertisements</title>
</head>
<body>
    <?php include('header.php') ?>
    <main>
    <table border="2">
    <tr>
        <th>Id</th>
        <th>Userid</th>
        <th>Title</th>
    </tr>
    <?php
        require('../controller/controller.php');
        $ads = list_ads(null);
        foreach ($ads as $act_ad) {
            echo "<tr>";
            echo "<td>".$act_ad[0]."</td>";
            echo "<td>".$act_ad[1]."</td>";
            echo "<td>".$act_ad[2]."</td>";
            echo "</tr>";
        };
    ?>
    </table>
    </main>
    <?php include('footer.php') ?>
</body>
</html>