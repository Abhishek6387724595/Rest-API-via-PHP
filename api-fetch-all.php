<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');


include 'conn.php';



$sql = "select * from students";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);

    echo json_encode($output);

}
else{
    echo json_encode(array('message'=>'No recourd','status'=>false));
}

?>