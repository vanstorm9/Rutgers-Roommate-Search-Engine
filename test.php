<html>
<head>
    <script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.mi.css" rel="stylesheet">
	<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 
</head>
<body>
<?php

$array = array("Volvo","BMW","Toyota");

for($i = 0; $i < count($array); $i++) 
{
?>
    <p><button type="button" onclick='load()'><div id='adiv_<?php echo $i;?>'>Add this person</div></button></p>
<?php
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 

<script>
//Changes button text to "You added him!"
function load(){                                    
    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
    <?php
    echo "var divArray = {";
    for($i = 0; $i < count($array); $i++) 
    {
       echo "'adiv_".$i."',".($i < $count-1 ? "," : "");
    }
    echo "};" /// after the loop this will output like var divArray = {'adiv_1','adiv_2', ... };
    ?> 

    for (var i = 0; i < divArray.length; i++) {                         
        document.getElementById(divArray[i]).innerHtml(dataFromResponse[i]); // assuming you've processed the response from AJAX into an array

    }
  }
}

xmlhttp.open('GET','include.inc.php', true);
xmlhttp.send();
</script>
</body>