<?php
session_start();

include_once('../config/database.php');

// SPECIFY IN HERE "" THE NAME OF YOUR TABLE FROM YOUR DATABASE.
$table_name     = "users";

// INCLUDE IN HERE "" THE VARIABLES(COLUMNS) YOU USE IN YOUR DATABASE, MAKE SURE THE SPELLING IS THE SAME.
$user_level     = "userLevel";
$user_name      = "userName";
$last_name      = "lastName";
$first_name     = "firstName";
$middle_name    = "middleName";
$contact_number = "contactNumber";
$pass_word      = "pword";
$date_created   = "dateCreated";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userLevel = $_POST['userLevel'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $contactNumber = $_POST['contactNumber'];
    $userName = $_POST['userName'];
    $pword = $_POST['pword'];

    $err = [
        'err_lastName' => '',
        'err_firstName' => '',
        'err_contactNumber' => '',
        'err_userName' => '',
        'err_pword' => '',
    ];


    // Validation
    if (empty($lastName)) {
        $err['err_lastName'] = "Your Last Name cannot be blank.";
    }
    if (empty($firstName)) {
        $err['err_firstName'] = "Your First Name cannot be blank.";
    }
    if (empty($contactNumber)) {
        $err['err_contactNumber'] = "Contact Number cannot be blank.";
    }
    if (empty($userName)) {
        $err['err_userName'] = "Username must not be blank.";
    }
    if (empty($pword)) {
        $err['err_pword'] = "Password cannot be blank.";
    }


    if (empty(array_filter($err))) {
        $dateCreated = date('Y-m-d');
        $pword = md5($pword);

        $query = "INSERT INTO $table_name (
            $user_level,
            $last_name,
            $first_name,
            $middle_name,
            $contact_number,
            $user_name,
            $pass_word,
            $date_created 
        )
        VALUES (
            '$userLevel',
            '$lastName',
            '$firstName',
            '$middleName',
            '$contactNumber',
            '$userName',
            '$pword',
            '$dateCreated')";

        if (mysqli_query($conn, $query)) {
            echo '<br>User was Added Successfully!';
        } else {
            echo '<br>Error: ' . $query . ' ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $_SESSION['err'] = $err;
        header('location: ../user/user_add.php');
    }
}
