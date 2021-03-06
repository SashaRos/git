<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Resizable - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
  #resizable { width: 150px; height: 150px; padding: 0.5em; }
  #resizable h3 { text-align: center; margin: 0; }
  </style>
  <script>
  $(function() {
    $( "#resizable" ).resizable();
  });
  </script>
</head>
<body>
 
<table style = "width:100%;" >
  <tr>
    <td style= "width:50%;">
      <div id="resizable" class="ui-widget-content">
        <h3 class="ui-widget-header">Resizable</h3>
      </div>
    </td>
    <td style = "width:50%;">
      <div id="resizable" class="ui-widget-content">
        <h3 class="ui-widget-header">Resizable</h3>
      </div>
    </td>
  </tr>
</table>
 
 
</body>
</html>