<?php
// Include necessary files and start the session
include('includes/config.php');
include('includes/database.php');
include('includes/functions.php');

// Check if the user is already logged in and has a role
if (isset($_SESSION['id'])) {
    header('Location: add_projects.php'); // Redirect if the user is already logged in
    exit();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $enteredPassword = $_POST['password'];

    // Prepare and execute a SQL query to fetch the user with the provided email
    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $connect->prepare($sql)) {
        $stmt->bind_param('s', $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        $stmt->close();

        if ($user) {
            // Verify the entered password against the stored hash
            if (password_verify($enteredPassword, $user['password'])) {
                // Successful login, set user information in the session
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['username'] = $user['username'];

                // Redirect to the desired page after successful login
                header('Location: add_projects.php');
                exit();
            } else {
                echo '<script>alert("Invalid email or password");</script>';
            }
        } else {
            echo '<script>alert("Invalid email or password");</script>';
        }
    } else {
        echo '<script>alert("Could not prepare statement!");</script>';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Vendor CSS file -->
    <link rel="stylesheet"
        href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css>
    <!-- Custom CSS files -->
    <link rel="stylesheet" href="css/style.css">

</head>


<body class="colored">

    <section class="container login">
        <div class="row">
            <div class="col-md-12 offset-md-5 mx-auto log">
                <div class="card my-5">

                    <form method="post" class="card-body cardbody-color p-lg-5">
                        <h3><strong>ADMIN LOGIN</strong></h3>

                        <div class="text-center">
                            <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png"
                                class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px"
                                alt="profile">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email"></label>
                            <input type="email" id="email" name="email" class="form-control" required
                                placeholder="Enter Email" />

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password"></label>
                            <input type="password" id="password" name="password" class="form-control" required
                                placeholder="Enter Password" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-color px-5 mt-3 mb-3">Login</button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

