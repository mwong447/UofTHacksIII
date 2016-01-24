<?php
 
    $result = $_REQUEST['Body'];
    $result = strtolower($result);
    $result = preg_replace('/\s+/', '', $result);
    $result = preg_replace('/[^A-Za-z0-9\-]/', '', $result);

header("Location: http://oaceo.com/dj/increaseDatabase.php/?vote=".$result);
die(); 
 
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Sms><?php echo $result ?>, thanks for the call!</Sms>
</Response>