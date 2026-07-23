<?php
session_start();
include("../main/connection.php");

if (isset($_POST['register'])) {
    $mm_user_name     = mysqli_real_escape_string($conn, trim($_POST['mm_user_name']));
    $mm_user_email    = mysqli_real_escape_string($conn, trim($_POST['mm_user_email']));
    $mm_user_password = mysqli_real_escape_string($conn, $_POST['mm_user_password']);

    // Encrypt Password
    $mm_user_password = password_hash($mm_user_password, PASSWORD_DEFAULT);

    // Current Date & Time
    date_default_timezone_set('Asia/Kolkata');
    $mm_user_created = date("h:i:s A d-m-Y");

    // Default Status
    $mm_user_status = 0;

    // Check Email Already Exists
    $check = mysqli_query($conn, "SELECT mm_user_id FROM mm_user WHERE mm_user_email='$mm_user_email'");

    if (mysqli_num_rows($check) > 0) {
        echo "<script>
                alert('Email Address Already Registered!');
                window.history.back();
              </script>";
        exit;
    }

    // Insert User
    $insert = mysqli_query($conn, "
        INSERT INTO mm_user
        (
            mm_user_name,
            mm_user_email,
            mm_user_password,
            mm_user_status,
            mm_user_created
        )
        VALUES
        (
            '$mm_user_name',
            '$mm_user_email',
            '$mm_user_password',
            '$mm_user_status',
            '$mm_user_created'
        )
    ");

    if ($insert) {
        echo "<script>
                alert('Registration Successful.');
                window.location='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Something went wrong!');
                window.history.back();
              </script>";
    }
}

if (isset($_POST['login'])) {
    $mm_user_email = mysqli_real_escape_string($conn, trim($_POST['mm_user_email']));
    $mm_user_password = $_POST['mm_user_password'];

    // Check User
    $query = mysqli_query($conn, "SELECT * FROM mm_user WHERE mm_user_email='$mm_user_email' LIMIT 1");

    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);

        // Verify Password
        if (password_verify($mm_user_password, $user['mm_user_password'])) {
            // Check Account Status
            if ($user['mm_user_status'] == 1) {
                $_SESSION['mm_user_id'] = $user['mm_user_id'];
                $_SESSION['mm_user_name'] = $user['mm_user_name'];
                $_SESSION['mm_user_email'] = $user['mm_user_email'];

                echo "<script>
                        alert('Login Successful');
                        window.location='..index.php';
                      </script>";
            } elseif ($user['mm_user_status'] == 0) {
                echo "<script>
                        alert('Your account is not verified.');
                        window.history.back();
                      </script>";
            } elseif ($user['mm_user_status'] == 2) {
                echo "<script>
                        alert('Your account has been suspended.');
                        window.history.back();
                      </script>";
            } else {
                echo "<script>
                        alert('Your account has been Permanently Blocked.');
                        window.history.back();
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Invalid Password.');
                    window.history.back();
                  </script>";
        }
    } else {
        echo "<script>
                alert('Email Address not found.');
                window.history.back();
              </script>";
    }
}
