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
    $passwordForm = validate($_POST['password']);

    if ($conn) {
        $sql = "SELECT * FROM Users WHERE Username = ?";
        $params = array($usernameForm);
        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        if ($user && password_verify($passwordForm, $user['Password'])) {
            $_SESSION['user'] = $user['Username'];
            header("Location: index.php");
        } else {
           header("Location: loginPage.php?error=Invalid username or password.");
        }

        sqlsrv_free_stmt($stmt);
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

