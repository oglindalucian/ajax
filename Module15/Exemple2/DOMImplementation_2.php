<?php
header("Content-Type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>";
echo "<topic>";
 
if (isset($_GET['Pseudo'])) {
        $pseudo = $_GET['Pseudo'];
 
        if ($pseudo == 'Thunderseb') {
                echo '<author>Thunderseb</author>';
                echo '<country>Belgium</country>';
                echo '<lang>French</lang>';
        } else if ($pseudo == 'Laurence') {
                echo '<author>Laurence</author>';
                echo '<country>Belgium</country>';
                echo '<lang>French</lang>'; 
        } 
} 
echo "</topic>";
?>
