<?php

$conn = pg_pconnect("dbname=postgres user=postgres password=0192");
$name = $_POST['name'];
$temp = '/Users/postgres/tmp.jpg';

$query = "select lo_export(image, '$temp') from image where name = '$name'";
$result = pg_query($query);

if($result)
{
    while ($line = pg_fetch_array($result))
    {
        $ctobj = $line["image"];
        echo "<IMG SRC=show.php>";
        printf ("<br/>".$line["name"]." - ".$line["day"]." ");
    }

}
else { echo "File does not exists."; }
pg_close($conn);

?>