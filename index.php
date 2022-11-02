
<?php 
$path_folder ="TUT";
include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/version_css_js.php';
?>

<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PLUGIN FOR STYLE -->


<link rel="stylesheet" type="text/css" href="/<?php echo $path_folder; ?>/tabulator.css?v=<?php echo $js_version; ?>">
<link rel="stylesheet" type="text/css" href="/<?php echo $path_folder; ?>/bootstrap.min.css?v=<?php echo $js_version; ?>">
<script src="/<?php echo $path_folder; ?>/jquery.js?v=<?php echo $js_version; ?>"></script>


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PLUGIN FOR STYLE -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TUT</title>
</head>
<body>
<center>
        <div class="col-xs-12 col-lg-12 table-responsive profile-picture" >
            <div class="col-xs-12 col-lg-12 widget-container-col" id="widget-container-col-1" >
                <div class="widget-box widget-color-orange" id="widget-box-1">
                        <div class="widget-header widget-header-small" >
                          <h6 class="widget-title">
                                      <center>
                            <b><div style="display: inline !important; color:darkred;"><?php echo strtoupper($v); ?></div></b>
                          </center>
                          </h6>
                        </div>
                    <div class="widget-body">

<?php 

include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/CRUD_HTML.php';

?>
<br>

<?php 

include $_SERVER['DOCUMENT_ROOT'].'/'.$path_folder.'/TABULATOR_HTML.php';

?>


                    </div>
                </div>
            </div>
        </div>
</center>


<div id="AJAX_RESULT"></div>



</body>
</html>


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PLUGIN FOR JAVASCRIPT -->


<script src="/<?php echo $path_folder; ?>/jquery.js?v=<?php echo $js_version; ?>"></script>
<script src="/<?php echo $path_folder; ?>/bootstrap.min.js?v=<?php echo $js_version; ?>"></script>
<script src="/<?php echo $path_folder; ?>/tabulator.min.js?v=<?php echo $js_version; ?>"></script>


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- PLUGIN FOR JAVASCRIPT -->


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- FUNCTION CREATED USING JAVASCRIPT -->


<!-- INSERT FUNCTION -->
<script src="/<?php echo $path_folder; ?>/INSERT_FUNCTION.js?v=<?php echo $js_version; ?>"></script>
<!-- UPDATE FUNCTION -->
<script src="/<?php echo $path_folder; ?>/UPDATE_FUNCTION.js?v=<?php echo $js_version; ?>"></script>
<!-- DELETE FUNCTION -->
<script src="/<?php echo $path_folder; ?>/DELETE_FUNCTION.js?v=<?php echo $js_version; ?>"></script>

<!-- GETTIMEDATE FUNCTION -->
<script src="/<?php echo $path_folder; ?>/GETDATETIME.js?v=<?php echo $js_version; ?>"></script>
<!-- GETTIMEDATE FUNCTION -->
<!-- TABULATOR FUNCTION -->
<script src="/<?php echo $path_folder; ?>/TABULATOR_FUNCTION.js?v=<?php echo $js_version; ?>"></script>
<!-- TABULATOR FUNCTION -->


<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- FUNCTION CREATED USING JAVASCRIPT -->