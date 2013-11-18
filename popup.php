<head>
<link rel="stylesheet" type="text/css" href="CoolStyle.css" >
</head>



<table class="header" height="30px";><col width="20px" /><col width="50px" /><col width="70px" /><tr><td>ShiftManager</td><td >Joiner</td><td>Date</td></tr></table>

<?php
for($i=0; $i<10; $i++)
{
    if($i%2!=0)
    {
        $a= "Just change the colors, and it will look just fine! :) ";
        $a= "<table><tr><td>sdsd</td><td >Other shit</td><td>Title 3dsdsdd</td></tr></table>";
        echo "<button onclick=\"myFunction('".$a."')\"><table class=\"odd\" style=\"height:15%;\"><col width=\"20px\" /><col width=\"50px\" /><col width=\"70px\" /><tr>
        <td>sdsd</td><td >Other shit</td><td>Title 3dsdsdd</td></tr></table></button>";
    }
    else
    {
        $a="I can add a whole lot of stupid text here \\n and I can even break rows.";
        echo "<button onclick=\"myFunction('".$a."')\"><table class=\"even\" style=\"height:15%;\"><col width=\"20px\" /><col width=\"50px\" /><col width=\"70px\" /><tr>
        <td>sdsd</td><td \"width>Othdsdssdsder shit</td><td>Title 3dsdsdd</td></tr></table></button>";
    }
}
?>
<script language="javascript" type="text/javascript">
    function myFunction(a)
    {
        alert(a);
    }
</script>


