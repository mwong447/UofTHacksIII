<?php

//database login info
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
//echo "Connected successfully";


//get the count from the voted for song
$sql = "SELECT * FROM SongPoll ORDER BY Count DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "url: " . $row["Url"];
        $playUrl = $row["Url"];
        $searchName = $row["Search"];
    }
} else {
    echo "0 results";
}





$sql = "UPDATE SongPoll SET Count = 0 WHERE Search = '$searchName'";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);

?>