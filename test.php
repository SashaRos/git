<!DOCTYPE html>
<html>
<body>

<p>Click the button to demonstrate line-breaks in a popup box.</p>

<button onclick="myFunction()"><table><tr><td>hhg</td><tr>jjjh</tr></tr></table></button>

<?php
$a = 10;
?>
<script language="javascript" type="text/javascript">
    function myFunction()
    {
        var a = "<?php echo $a; ?>";
        alert(a);
    }
</script>


</body>
</html>


