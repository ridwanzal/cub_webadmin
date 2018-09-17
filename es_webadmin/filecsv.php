
<?php
/*module for handling csv files 
use for registration
*/

$row = 1;
if (($handle = fopen("contacts.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }
  }
  fclose($handle);
}
?>  