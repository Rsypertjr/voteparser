<?php
// Read the file contents into a string variable,
// and parse the string into a data structure
if(isset($_GET["state"])) {
      if($_GET["state"] == "Michigan"){
            $str_data = file_get_contents("/home/rlsjr/Documents/Michigan2020.txt");
      }
      else if($_GET["state"] == "Pennsylvania"){
            $str_data = file_get_contents("/home/rlsjr/Documents/Pennsylvania2020.txt");
      }
      
      //$data = json_decode($str_data,true);            
      //print_r($data);
      //$fh = fopen("data_out.json", 'w')
            //or die("Error opening output file");
      //fwrite($fh, json_encode($data,JSON_UNESCAPED_UNICODE));
      //fclose($fh);

      header('Content-Type: application/json');
      //echo json_encode($data);
      echo $str_data;
      die();
}