<html>
<body bgcolor="black" text="white" >
<?php mail( "zdenek.mihu@seznam.cz",$p,$z) ?>
<?php
if ($p!="" and $z!="")
{
echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
}
else
{
echo "<p>Váš e-mail se <strong>nepodařilo odeslat.</strong> Pravděpodobně jste nevyplnili všechny údaje.</p>";
} 
?>
</body>
</html>
