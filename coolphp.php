<head>
<link rel="stylesheet" type="text/css" href="CoolStyle.css" >
</head>

<table class="header" height="30px";><col width="20px" /><col width="50px" /><col width="70px" /><tr><td>ShiftManager</td><td >Joiner</td><td>Date</td></tr></table>

<?php
for($i=0; $i<10; $i++)
{
    echo "<div class=\"collapsedNode\" style=\"cursor:pointer\" href=\"#\" onclick=\"this.className = this.className=='collapsedNode' ? 'expandedNode' : 'collapsedNode'\">";
    if($i%2!=0)
    {
        echo "<table class=\"odd\" style=\"height:15%;\"><col width=\"20px\" /><col width=\"50px\" /><col width=\"70px\" /><tr><td>sdsd</td><td >Other shit</td><td>Title 3dsdsdd</td></tr></table>";
        echo "<div class=\"answer\">Just change the colors, and it will look just fine! :) </div></div>";
    }
    else
    {
        echo "<table class=\"even\" style=\"height:15%;\"><col width=\"20px\" /><col width=\"50px\" /><col width=\"70px\" /><tr><td>sdsd</td><td \"width>Othdsdssdsder shit</td><td>Title 3dsdsdd</td></tr></table>";	
        echo "<div class=\"answer\">Great! <br> Lots of it. </div></div>";
    }
}
?>


