 <?php
if (isset($_POST['submit'])) {
    // Error handling for database connection
    try {
        $db = mysqli_connect("localhost", "root", "", "db");
        if (!$db) {
            throw new Exception("Error connecting to database: " . mysqli_connect_error());
        }
    } catch (Exception $e) {
        echo "Database connection error: " . $e->getMessage();
        exit(); // Terminate script execution
    }

    // Secure input validation
    $name = mysqli_real_escape_string($db, trim($_POST['name']));
    $mobile = mysqli_real_escape_string($db, trim($_POST['mobile']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL); // Improved email validation

    // Check for checkbox selection
    $terms = isset($_POST['term']) ? 1 : 0; // Assign 1 for checked, 0 for unchecked

    // Construct prepared statement for secure insertion
    $stmt = mysqli_prepare($db, "INSERT INTO `admin` (`name`, `mobile`, `email`, `terms`) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        echo "Error preparing statement: " . mysqli_error($db);
        exit();
    }

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $mobile, $email, $terms);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);
    if (!$result) {
        echo "Error inserting data: " . mysqli_stmt_error($stmt);
        exit();
    }

    // Success message after successful insertion
    if ($result) {
        echo "Data inserted successfully <a href='admin.php'>Go back</a>! to login";
    }
    
    // Close resources (prepared statement and connection)
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}
?>
