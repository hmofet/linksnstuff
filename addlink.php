<?php


if ( isset( $_POST['SubmitData'] ) ) {  //check if the submit button on index.php has been clicked

	//assign text box input from index.php to variables


$servername = "localhost";
$username = "testuser";
$password = "password";
$dbname = "testuser";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO resources (user, url) 
    VALUES (:user, :url)");
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':url', $url);

    // insert a row
   $user = $_POST['user'];
	$url = $_POST['url'];
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
}

echo '<a href="showlinks.php">Show links</a>';
?>