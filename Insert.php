
<?php 
global $yourservice;
global $yourname;
global $yourphone;
global $youremail;
$yourname = filter_input(INPUT_POST, 'name');
$youremail = filter_input(INPUT_POST, 'email');
$yourphone = filter_input(INPUT_POST, 'phone');

 for($i = 0; $i<= 4; $i++){

    if(isset($_POST['service'][$i]))

        $yourservice .= ' '.$_POST['service'][$i];
		
    
}


if((isset($yourname)&& $yourname !='') && (isset($youremail)&& $youremail !=''))
{
 require_once("contact_mail.php");
}
$host = "localhost";
$userName = "diascoac";
//$userName = "root";
$password = "Fs98mfR.2Zw6]Z";
//$password = "";
$dbName = "diascoac_BD";
//$dbName = "tienda";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
      
  
$sql ="INSERT INTO contact_form_info (name, email, service, phone, comment) VALUES ('".$yourname."','".$youremail."','".$yourservice."', '".$yourphone."')";


    if ($conn->query($sql)){
        
   $resultado = "Diascoac1";
    
     }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    
    
$conn->close();
}
