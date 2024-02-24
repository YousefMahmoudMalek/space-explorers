<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="..\homee.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(wallpaperflare.com_wallpaper.jpg);
            background-size: cover;
            height: 97vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            backdrop-filter: blur(5px);
            border: 1px solid #72582c;
        }

        .jumbotron {
            backdrop-filter: blur(5px);
            background-color: transparent;

        }

        .card {
            backdrop-filter: blur(5px);
            background-color: transparent;
            color: white;
        }
    </style>
</head>

<?php include 'header.php'; ?>

<body>
    <div class="container">
        <div class="jumbotron" style="backdrop-filter: blur(5px)">
            <div class="card ">
                <div class="card-header">
                    <h5> Modification panel </h5>
                </div>
                <form action="includes/edithandler.php" method="post">
                    <div class="card-body">
                        <h5 class="card-title">You can modify the data of the user here </h5>
                        <p class="card-text">Keep in mind this doesn't force validity checks, so be mindful.</p>

                        <div class="row">
                            <div class="col-md-12 text-right">
                                <!-- Corrected the button to be an input element of type "submit" -->
                                <input type="submit" name="submit" value="CONFIRM" class="btn btn-success btn-mx-2 badge-pill" style="width: 100px;" />
                            </div>
                        </div>
                        <table class="table table-hover table-bordered table-dark">
                            <caption>Current user</caption>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">State </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('connection.php');
                                $currentUserId = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM `user` WHERE user_id = $currentUserId";
                                $sql = mysqli_query($con, $query);
                                if ($sql->num_rows > 0) {
                                    foreach ($sql as $sqlitems) {
                                ?>
                                        <tr>
                                            <td>
                                                <input type="text"  name="user_id" value="<?= $sqlitems['user_id'] ?>" />
                                            </td>
                                            <td>
                                                <input type="text" name="user_username" value="<?= $sqlitems['user_username'] ?>" />
                                            </td>
                                            <td>
                                                <input type="text" name="user_email" value="<?= $sqlitems['user_email'] ?>" />
                                            </td>
                                            <td>
                                                <input type="text" name="user_password" value="<?= $sqlitems['user_password'] ?>" />
                                            </td>
                                            <td>
                                                <select name="user_state">
                                                    <option value="1" <?= $sqlitems['user_state'] == 1 ? 'selected' : '' ?>>Active</option>
                                                    <option value="0" <?= $sqlitems['user_state'] == 0 ? 'selected' : '' ?>>Banned</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No record found </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>