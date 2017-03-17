<!DOCTYPE html>
<!--  Working  Ajax  Json  -->
<!--http://json.parser.online.fr/-->
<html>
<head>
<title>Php  Json</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

</script>
</head>
<body>
<img  src='https://d2x5ku95bkycr3.cloudfront.net/img/loading.gif'  style='width:;'/>  <!-- http://ausztriajob.at/gif/ausztriajob_kozeppont.gif -->

<?php
// This is  PHP  version og getting Json  from   your  spreadsheet;
//http://stackoverflow.com/questions/29308898/how-do-i-extract-data-from-json-with-php;
//http://json.parser.online.fr/   JSON VIEWER;



// **************************************************************************************
// **************************************************************************************
// **                                                                                  **

$json = file_get_contents('https://spreadsheets.google.com/feeds/list/1yMCXjYbUCZ10J38pBYSB6KQdWyF-2Hfg-YZAdZPJOPM/3/public/values?alt=json');
//echo $json;
$obj = json_decode($json,true);//,  true used for [], not  used  for '->';
//echo 1;
//print_r($obj);
         





// With  'true'  OPTION   usage =WORKS!!!!!!!!!!!!!!!!!!!!!1
//just testing  1  entry
//echo "</br> FINAL _____->". $obj['feed']['entry'][0]['gsx$_cn6ca']['$t'];     //$obj['feed']['category'][0]['scheme'];      //<- this woks!!!!!!!!!!!!!!!&this->   //$obj['feed']['entry'][0]['gsx$_cn6ca']['$t']; 
 

$iCount = count($obj['feed']['entry']);  echo '</br>numbers of  rows=>'. $iCount; //  count  number  of  array  elements   for  looping;
echo "<table>";
  for ($i=0;$i<$iCount;$i++)
  {echo '<tr><td style="width:120px;">'  .$obj['feed']['entry'][$i]['gsx$_cn6ca']['$t']  . "</td><td style='color:red;width:60px;'> "  .$obj['feed']['entry'][$i]['gsx$firstname']['$t'].  "</td><td>"      .$obj['feed']['entry'][$i]['gsx$_ciyn3']['$t'].          "</td> </tr>";}  
echo "</table>";
// **                                                                                  **
// **                                                                                  **
// **************************************************************************************
// **************************************************************************************



// No  true  usage- Does not  work!!!!!!!
//echo "</br> FINAL _____->". $obj->feed->entry[0]->gsx$_cn6ca->$t;      // $obj->feed->category[0]->scheme;;   //<- this woks    // this from JS feed.entry[i]['gsx$_cn6ca']['$t']


echo "</br></br></br>";

//---------------------------------
//Good-Looking JSON <pre JSON>
echo "<pre>";
print_r($obj);
echo "</pre>";
// End  Good-Looking JSON  <pre> JSON 
//---------------------------------


?>

</body>