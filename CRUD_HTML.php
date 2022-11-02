
                        <div class="widget-main table-responsive" style="height:500px !important;">
                        	INSERT FUNCTION<br>
                        	<input type="text" id="in_1"><br>
                        	<input type="number" id="in_2"><br>

                            <div id="I_div">
                        	<button id="in_btn">Insert</button>
                            </div>
                            <div id="UDC_div"  style="display:none;">
                            <button id="update_btn">Update</button>
                            <button id="delete_btn">Delete</button>
                            <button id="cancel_btn">Cancel</button>
                            </div>
                        </div>


<script type="text/javascript">
    


$('#cancel_btn').on("click",function(){

 localStorage.RID = '';
     $('#in_1').val('');
     $('#in_2').val('');
        
    $("#UDC_div").hide();
    $("#I_div").show();


})







</script>




    
