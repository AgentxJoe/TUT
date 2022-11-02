<style type="text/css">
html {
  touch-action:none;
}

  
  .input-group{
  /*position: relative;*/
  padding: 15px 0 0;
  margin-top: -10px;
}

.nil_1 {
  font-family: inherit;
  width: 100%;
  font-size: 16px;
  padding: 7px 4px;
  background: transparent;
  transition: border-color 0.2s;
  box-sizing: border-box;
  width: 100%;
  margin: 0 0 1em 0;
  border: 1px solid #8b1c20;
  background: #eeeeee;
  resize: none;
  outline: none;
}

/*input[id="full-name"],
input[id="email1"] {
    height: calc(3em + 2px);
}*/
.nil_1::placeholder {
  color: transparent;
}

.nil_1:placeholder-shown ~ .nil_2 {
  font-size: 16px;
  cursor: text;
  top: 20px;
}

.nil_2,
.nil_1:focus ~ .nil_2 {
  position: absolute;
  top: 5px;
  left: 8px;
  display: block;
  transition: 0.2s;
  font-size: 12px;
  color: #9b9b9b;
  background-image: linear-gradient(to bottom, #eeeeee, #eeeeee);
  background-size: 105% 5px;
  background-repeat: no-repeat;
  background-position: center;
}

.nil_1:focus ~ .nil_2 {
  color: #8b1c20;
}

.nil_1:focus {
  padding-bottom: 6px;
  border: 1px solid #8b1c20;
}

.nil_1:valid {
    border-color: green;
}

.nil_1:valid ~ .nil_2 {
  color: green;
}
</style>




  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dtr_user_db = "dtr_user";
$dtr_user_conn = new mysqli($servername, $username, $password, $dtr_user_db);


  // $servername = "172.16.1.13"; $un = "root1"; $pw = "0000";
  
$ptp="ptp";

//   $localname = "localhost"; $un = "root"; $pw = "";
//   $servername = "172.16.1.13"; $un = "root"; $pw = "";


//   $dbname1 = "masterdatabase";
//   $dbname2 = "prima";
//   $conn1 = new mysqli($servername, $un, $pw, $dbname1);
//     $conn2 = new mysqli($localname, $un, $pw, $dbname2);

//   if ($conn2->connect_error) {
//       die("Connection failed: " );
//   } 

// $serverName = "172.16.1.13\PTPISQLSVR"; 
// $connectionInfo = array( "Database"=>"ProdOutput_db", "UID"=>"e.rubio", "PWD"=>"prima");
// $conn = sqlsrv_connect($serverName, $connectionInfo);

      ?>



 
	