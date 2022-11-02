  

<?php
include 'conn2.php';
$un=trim(strtolower($_POST['un']));
$pw1=$_POST['pw'];

$pword_tb='';
$verify_uid=0;
if(isset($dtr_user_conn)) { 
  $sql = "SELECT * FROM `user_tb` WHERE `rfid`='$un' OR `user_id`='$un' ";
  $res = mysqli_query($dtr_user_conn, $sql);
  if(@mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_array($res)) {

     $pword_tb=$row[3];
     $authority_tb=$row[4];
     ?>
<script type="text/javascript">
  var encrypt_uid = Aes.Ctr.encrypt( '<?php echo $row[1]; ?>','<?php echo $ptp; ?>',  256 ); //decrypt(password,salt,bit);
  var authority_tb='<?php echo $authority_tb; ?>';

</script>

<?php
 // session_start();
 // $_SESSION['user_id'] = $row['user_id'];
                    $verify_uid=1;
}
}



if ($verify_uid===0) {
	?>
<script type="text/javascript">
    iziToast.question({
      color: 'black',
      backgroundColor: '#FFCC66',
    title: '<span>HDS v1.0 :',
    message: '<span>Incorrect user id or password.',
     timeout:              3000,
      icon: '',
});
</script>
	<?php
}
else{
	?>

<script src="AES_MNv1.js"></script>
<script type="text/javascript">
var pword_tb ="<?php echo $pword_tb; ?>";
// console.log(pword_tb)
var pw1="<?php echo $_POST['pw']; ?>";
// console.log(text_decript_db+' : '+pw1);


if (pword_tb !== pw1) {
  $("#inputUserID").focus();
    iziToast.question({
      color: 'black',
      backgroundColor: '#FFCC66',
    title: '<span>HDS v1.0 :',
    message: '<span>Incorrect user id or password.',
     timeout:              3000,
      icon: '',
});
}
else{


	  iziToast.question({
	  	color: 'black',
	  	backgroundColor: '#FFCC66',
    title: '<span>HDS v1.0 :',
    message: '<span>You are logged in now!',
     timeout:              3000,
      icon: '',
});
  localStorage.uid=encrypt_uid;
  localStorage.authority_tb=authority_tb;
  setTimeout(function(){  window.location.assign("/1_HDS/") }, 2000);
}



</script>
	<?php	
}
}
?>