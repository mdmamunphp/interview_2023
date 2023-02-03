

 <?php
require_once __DIR__ . '/vendor/autoload.php';
use \Firebase\JWT\JWT;

$servername="localhost";
$username="root";
$pass="";
$database="interview";
    $conn=new mysqli("localhost","root","","interview" );
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        extract($_POST);
    //    $name=$_POST['name'];
           
            $rid=$conn->query("insert into test set name='$name',pass='1234'");
            $rid2=$conn->query("update  test set name='md mamun',pass='12345' where id=1");
            $rid3=$conn->query("delete from  test  where id=2");
            if($rid==1){
                echo "data save is done.<br>";
            }else{
                echo "data save is not done.<br>";
            }

            if($rid2==1){
                echo "data Update is done.<br>";
            }else{
                echo "data Update is not done.<br>";
            }

            if($rid3==1){
                echo "data delete is done.<br>";
            }else{
                echo "data delete is not done.<br>";
            }
    }else{
        echo "data not found";
    }
    // $arr=array(1=>"BANGLA",2=>"MATH",3=>"ENGLISH");
    // header("Content-type:applocation.json");
    // echo json_encode($arr);
    
  

    $this->token = array(
            //Adding the identifier to the token (who issue the token)
            "iss" => $iss,
            "aud" => $iss,
            // Adding the current timestamp to the token, for identifying that when the token was issued.
            "iat" => $this->issuedAt,
            // Token expiration
            "exp" => $this->expire,
            // Payload
            "data" => $data
        );

        $this->jwt = JWT::encode($this->token, $this->jwt_secrect, 'HS256');
        return $this->jwt;

    ?>