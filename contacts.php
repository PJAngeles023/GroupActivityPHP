<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Application</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5">
                <h1 class="fw-bold">Contacts</h1>
                <p>Here are the list of your contacts .</p>
                <div class="card">
                    <div class="card-body">
                    </div>
                    <div class="card-body">
                        <?php
                        include 'config/dbconnect.php';

                        $sql = "SELECT * FROM contacts";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Name</th>";
                            echo "<th>Email</th>";
                            echo "<th>Phone</th>";
                            echo "</tr>";
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "No contacts found.";
                        }

                        ?>

                    </div>
                    <a href="#" onclick="document.getElementById('addform').style.display = 'block'">Add Contact</a>
                    <div class="card" id="addform" style="display:none;">
                        <div class="card-body">
                            <form action="config/add-contacts.php" method="POST">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <br>
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <br>
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                                <br><br>
                                <button type="submit" class="btn btn-primary">Add Contacts</button>
                            </form>
                        </div>
                    </div>
                    <a href="#" onclick="document.getElementById('editform').style.display = 'block'">Edit Contact</a>
                    <div class="card" id="editform" style="display:none;">
                        <div class="card-body">
                            <form action="config/edit-contacts.php" method="POST">
                                <label for="id">Enter the Id to update:</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                                <br>
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <br>
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <br>
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                                <br><br>
                                <button type="submit" class="btn btn-primary">Confirm edit</button>
                            </form>
                        </div>
                    </div>
                    <a href="#" onclick="document.getElementById('deleteform').style.display = 'block'">Delete Contact</a>
                    <div class="card" id="deleteform" style="display:none;">
                        <div class="card-body">
                            <form action="config/delete-contacts.php" method="POST">
                                <label for="id">Enter the Id to delete:</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                                <br>
                                <button type="submit" class="btn btn-primary">Confirm delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>