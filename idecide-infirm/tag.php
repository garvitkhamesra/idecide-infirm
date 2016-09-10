<!doctype html>
<html lang="en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tag-it.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
<link href="css/jquery.tagit.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
$(document).ready(function() {
$("#mytags").tagit({
  tagSource: function(search, showChoices) {
    $.ajax({
      url: "auto2.php",
      data: {search: search.term},
      success: function(choices) {
        showChoices(choices);
      }
    });
  }
});
});
</script>
</head>
<body>
<ul id="mytags">
<li>Tag1</li>
</ul>
</body>
</html>

