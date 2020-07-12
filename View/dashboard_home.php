<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Home</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- FAVICON -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/dashboard_home.css">
</head>
<body>
    <header>
        <!-- <a href="#"><img src="#"></a> -->
        <div class="logo__box">
            <a href="dashboard_home.php" class="logo"><span>E</span> Shop.</a>
        </div>
        <?php
            session_start();
            if(isset($_SESSION['login'])){
                $username=$_SESSION['username'];
                ?>
                <div class="wellcome__logout">
                    <p>Welcome <?php echo $username; ?></p>
                    <p><a href="../Controller/user_logout.php"><button>Log Out</button></a></p>
                </div> 
                <?php
            }
        ?> 
        <nav>
            <ul>
                <li><a href="home.php">Website</a></li>
                <li><a href="dashboard_home.php">Add Product</a></li>
                <li><a href="about.php">View Products</a></li>
                <li><a href="dashboard_users.php">Users</a></li>
                <li><a href="contact.php">Messages</a></li>
            </ul>
        </nav>
    </header>

    <div class="upload_form">
        <h1>Add Product</h1>
        <form action="../Controller/admin_product.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Name" name="title">
            <br>
            <input type="text" placeholder="Price" name="price">

            <div class="photos__row">
                <div class="file__chooser">
                    <label for="main__photo">Main Photo</label>
                    <input type="file" id="main__photo" name="main_photo">
                </div>

                <div class="file__chooser">
                    <label for="photo__1">Featured Photo</label>
                    <input type="file" id="photo__1" name="photo_1">
                </div>
            </div>

            <div class="photos__row">
                <div class="file__chooser">
                    <label for="photo__2">Photo 2</label>
                    <input type="file" id="photo__2"  name="photo_2">
                </div>

                <div class="file__chooser">
                    <label for="photo__3">Photo 3</label>
                    <input type="file" id="photo__3"  name="photo_3">
                </div>
            </div>
            <textarea name="description" placeholder="Description"></textarea>
            <input name="create__product" type="submit" value="Publish">
        </form>
    </div>
</body>
</html>