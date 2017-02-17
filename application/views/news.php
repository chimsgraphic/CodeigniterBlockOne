<?php
  
  $data = json_decode(file_get_contents('https://newsapi.org/v1/articles?source=entertainment-weekly&apiKey=3d18134cdc0a431dbc596e134afee184'));
 echo $data['title'];
?>