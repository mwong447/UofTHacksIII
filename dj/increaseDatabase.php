<?php
$searchName = $_GET['vote'];
echo $searchName;


$servername = "localhost";
$username = "imthedj";
$password = "imthedj";
$dbname = "DjPlayer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql = "SELECT Count FROM SongPoll WHERE Search = '$searchName'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $newCount = $row["Count"] + 1;
    }
} else {
    echo "0 results";
}


$sql = "UPDATE SongPoll SET Count = $newCount WHERE Search = '$searchName'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);




mysqli_close($conn);


//SELECT `Count` FROM `SongPoll` WHERE `Search`= 'hello'
//UPDATE `SongPoll` SET `Count`=1 WHERE `Search`='hello'


?>