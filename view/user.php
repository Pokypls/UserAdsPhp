<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta.php') ?>
    <title>Users</title>
</head>
<body>
    <?php include('header.php') ?>
    <main>
  
        <table border="2">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
    <?php
        require('../controller/controller.php');

        $users = list_users();
        
        foreach ($users as $act_user) {
            echo "<tr>";
            echo "<td>".$act_user->getId()."</td>";
            echo "<td>".$act_user->getName()."</td>";
            echo "</tr>";
        };
    ?>
        </table>
    </main>
    <?php include('footer.php') ?>
</body>
</html>