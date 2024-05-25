<?php
//session_start();
//
//$dsn = "sqlsrv:Server=193.85.203.188;Database=zajac";
//$username = "zajac";
//$password = "HonDal1197";
///*
//try {
//    $conn = new PDO($dsn, $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    $stmt = $conn->query("SELECT * FROM Users WHERE Username = '$username' AND Password = '$password'");
//
//    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//        print_r($row);
//    }
//} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}
//*/
//
//if (isset($_POST['username']) && isset($_POST['password'])) {
//    $db_serverName = "193.85.203.188";
//    $db_username = "zajac";
//    $db_password = "HonDal1197";
//    $db_dbName = "zajac";
//
//    //serverName\instanceName
//    $connectionInfo = array("Database" => $db_dbName, "UID" => $db_username, "PWD" => $db_password);
//    $conn = sqlsrv_connect($db_serverName, $connectionInfo);
//
//    $usernameForm = validate($_POST['username']);
//    $passwordForm = validate($_POST['password']);
//
//    if ($conn) {
//        $sql = "SELECT * FROM Users WHERE Username = ? AND Password = ?";
//        $params = array($usernameForm, $passwordForm);
//        $stmt = sqlsrv_query($conn, $sql, $params);
//
//        if ($stmt === false) {
//            die(print_r(sqlsrv_errors(), true));
//        }
//
//        $user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
//
//
//        if ($user && password_verify($passwordForm, $user['Password'])) {
//            $_SESSION['user'] = $user['Username'];
//            header("Location: welcome.php"); // Redirect to a welcome page or dashboard
//        } else {
//            header("Location: index.html?error=Invalid username or password.");
//        }
//
//        if ($user) {
//            // Assuming the password in the database is hashed, verify it
//            if (password_verify($passwordForm, $user['Password'])) {
//              echo "Hello, " . htmlspecialchars($user['Username']) . "!";
//            } else {
//                echo "Invalid username or password.";
//            }
//        } else {
//            echo "Invalid username or password.";
//        }
//
//        sqlsrv_free_stmt($stmt);
//    } else {
//        echo "Connection could not be established.<br />";
//        die(print_r(sqlsrv_errors(), true));
//    }
//
//    sqlsrv_close($conn);
//
//}
//
//function validate($data)
//{ $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//    return $data;
//}
//

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

