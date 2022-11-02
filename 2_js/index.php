
<script src="/TUT/ace_assets/js/bootstrap.min.js"></script>
<!-- <script src="/TUT/ace_assets/iziToast/css/iziToast.min.js"></script>
<script src="/TUT/ace_assets/iziToast/css/iziToast.js"></script> -->
<?php include $_SERVER['DOCUMENT_ROOT'].'/TUT/3_home/link_js_css.php'; ?>
<script src="/TUT/ace_assets/assets/js/jquery-ui.custom.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/TUT/ace_assets/assets/js/chosen.jquery.min.js"></script>
<script src="/TUT/ace_assets/assets/js/spinbox.min.js"></script>
<script src="/TUT/ace_assets/assets/js/bootstrap-datepicker.min.js"></script>
<script src="/TUT/ace_assets/assets/js/bootstrap-timepicker.min.js"></script>
<script src="/TUT/ace_assets/assets/js/moment.min.js"></script>
<script src="/TUT/ace_assets/assets/js/daterangepicker.min.js"></script>
<script src="/TUT/ace_assets/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="/TUT/ace_assets/assets/js/bootstrap-colorpicker.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.knob.min.js"></script>
<script src="/TUT/ace_assets/assets/js/autosize.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.inputlimiter.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.maskedinput.min.js"></script>
<script src="/TUT/ace_assets/assets/js/bootstrap-tag.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery-ui.custom.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.ui.touch-punch.min.js"></script>
<!-- <script src="/TUT/ace_assets/assets/js/jquery.easypiechart.min.js"></script> -->
<script src="/TUT/ace_assets/assets/js/jquery.sparkline.index.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.flot.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.flot.pie.min.js"></script>
<script src="/TUT/ace_assets/assets/js/jquery.flot.resize.min.js"></script>
<script src="/TUT/ace_assets/assets/js/ace-elements.min.js"></script>
<script src="/TUT/ace_assets/assets/js/ace.min.js"></script>

<!-- <script src="/TUT/ace_assets/assets/js/"></script> -->
<script type="text/javascript">
	$('#logout').on('click', function(e){
localStorage.removeItem('uid');
localStorage.removeItem('authority_tb');
// localStorage.removeItem('data_arr_tb');
// localStorage.removeItem('thread_id');
// localStorage.removeItem(user_account);
// localStorage.removeItem(user_pword);

		window.location.replace("/TUT/3_home/");

});

var uid = localStorage.uid;
  			if (typeof uid !== 'undefined' && uid !== null){

}
else{
		window.location.replace("/TUT/3_home/");
}






if (localStorage.authority_tb=='1') {

}
else if (localStorage.authority_tb=='0') {
	$("#li_1").hide();
	$("#li_2").hide();
	$("#li_6").hide();
}
</script>