<?php 
session_start();
if(!$_SESSION['login']){
    header ("LOCATION:loginindex.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>iDecide</title>
</head>
<body>
  <link rel="stylesheet" href="css/css1.css">
<script src="js/jsq.js"></script>
<script src="js/jsq2.js"></script>  
    <script>
     
$(function() {
            var availableTags = <?php include('search.php'); ?>;

    $( "#firstname" ).autocomplete({
 source: availableTags,
                autoFocus:true    });
});
</script>

<div class="ui-widget">
    <label for="firstname">Firstname: </label>
    <input id="firstname">
</div>
</body>
</html>

