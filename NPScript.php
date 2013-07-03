<?php
$row = 1;
if (($handle = fopen("nfp.csv", "r")) !== FALSE) {
   while (($data = fgetcsv($handle, 2000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            $data = str_replace(" @", "@",$data);
          $data = str_replace("@ ", "@",$data);
          $data = str_replace(";", ",",$data);

      if(!filter_var_array($data, FILTER_VALIDATE_EMAIL))
        {
            echo "Email is not valid";
        }
    else
        {
           echo $data[$c]. "<br />\n";
       }
        }
        }
        fclose($handle);
  }
?>