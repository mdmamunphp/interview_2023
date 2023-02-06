

 <?php
 

$servername="localhost";
$username="root";
$pass="";
$database="interview";
    $conn=new mysqli("localhost","root","","interview" );
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    header("Access-Control-Allow-Origin: *");
//    echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD']=="POST"){
       
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
    }else if($_SERVER['REQUEST_METHOD']=="GET"){
         extract($_GET);
   
 
        // $rid=$conn->query("insert into test set name='$name',pass='1234'");
        // if($rid==1){
        //     echo "data save is done/ _SERVER / GET name='$name'.<br>";
        // }

        $data=$conn->query("select * from test");
        $view="<table>";
        $view.="<tr><td>SL</td><td>Name</td><td>Pass</td></tr>";
        
        $arr=array();
        $i=1;
        while($res=$data->fetch_assoc()){
            // $view.="<tr>";
            // $view.="<td>".$i."</td>";
            // $view.="<td>".$res['name']."</td>";
            // $view.="<td>".$res['pass']."</td>";
            $arr[$i]['name']=$res['name'];
            $arr[$i]['pass']=$res['pass'];
            // $view.="</tr>";
            $i++;
        }
        $view.="<table>";
         echo json_encode($arr);
    //  echo  $view;
     

    }else if($_REQUEST['REQUEST_METHOD']=="GET"){
        extract($_POST);
        $rid=$conn->query("insert into test set name='$name',pass='1234'");
        if($rid==1){
            echo "data save is done/ _REQUEST / GET.<br>";
        }
    }else{
        
        echo "data not found";
    }

    
    

    

    ?>