<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $db_serverName = "193.85.203.188";
    $db_username = "zajac";
    $db_password = "HonDal1197";
    $db_dbName = "zajac";

    $connectionInfo = array("Database" => $db_dbName, "UID" => $db_username, "PWD" => $db_password);
    $conn = sqlsrv_connect($db_serverName, $connectionInfo);

    $usernameForm = validate($_POST['username']);
    $passwordForm = password_hash(validate($_POST['password']), PASSWORD_DEFAULT); // Hashing the password

    if ($conn) {
        // Check if the username already exists
        $sql_check = "SELECT * FROM Users WHERE Username = ?";
        $params_check = array($usernameForm);
        $stmt_check = sqlsrv_query($conn, $sql_check, $params_check);

        if ($stmt_check === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        if (sqlsrv_fetch_array($stmt_check, SQLSRV_FETCH_ASSOC)) {
            // Username already exists
            $_SESSION['error_message'] = 'Username already exists.';
            header("Location: registerPage");
        } else {
            // Insert the new user
            $sql_insert = "INSERT INTO Users (Username, Password) VALUES (?, ?)";
            $params_insert = array($usernameForm, $passwordForm);

            $stmt_insert = sqlsrv_query($conn, $sql_insert, $params_insert);

            if ($stmt_insert === false) {
                die(print_r(sqlsrv_errors(), true));
            }

            $_SESSION['success_message'] = 'Registration successful. Please log in.';
            header("Location: registerPage");
        }

        sqlsrv_free_stmt($stmt_check);
        sqlsrv_free_stmt($stmt_insert);
    } else {
        echo "Connection could not be established.<br />";
        die(print_r(sqlsrv_errors(), true));
    }

    sqlsrv_close($conn);
}

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

