<?php include_once 'header.php'; ?>

    <?php
    include_once 'config.php';

    $sql = "SELECT * from users";
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();

    $users = $getUsers->fetchAll();

    foreach ($users as $user) {

    }
    ?>
    <div class="d-flex" style="height: 100vh;">
        <div class="d-flex-column flex-shrink-0 p-3 text-white bg-dark" syle="width: 280px;">
    </div>

    <div class="p-5">
        <table class="mb-5 table table-borderd">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Action</th>
            </thead>

        <tbody>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><a href="delete.php?id=<?php echo $user['id'] ?>">Delete</a>
                </tr>
            <?php
            }
            ?>
        </tbody>
        </table>

        <?php include_once 'footer.php'; ?>
