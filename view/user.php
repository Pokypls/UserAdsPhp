<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('meta.php') ?>
    <title>Users</title>
</head>
<body>
    <main>
    <div class="flex-container">
    <?php include('header.php') ?>
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
            echo "<td>".$act_user[0]."</td>";
            echo "<td>".$act_user[1]."</td>";
            echo "</tr>";
        };
    ?>
        </table>
    </div>
    </main>
    <?php include('footer.php') ?>
</body>
</html>