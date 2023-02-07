<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "email";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL SELECT statement
    $sql = "SELECT name, email, message, date FROM email";

    // Execute SELECT statement
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='email_table'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "<th>Date</th>";
        echo "</tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found.";
    }

    // Close connection
    mysqli_close($conn);

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="js/main.js"></script>
</head>