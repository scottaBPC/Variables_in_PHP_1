
<HTML>

<BODY>

<?php

// declare and initialise some numeric variables

$myText1="Good Morning Campers!";
$myText2="Suits you Sir!";
$posWorld= strpos($myText1, "Campers");
$lngMyTxt1 = strlen($myText1);
$lngMyTxt2 = strlen($myText2);

// display the values of the string-length numeric variables
echo "The first string is: '";
echo $myText1;
echo "'<br/><br/>";
echo "The second string is: '";
echo $myText2;
echo "'<br/><br/>";

echo "The number of characters in the first string is ";

echo $lngMyTxt1;

echo "<br/><br/>";

echo "The number of characters in the second string is ";

echo $lngMyTxt2;

echo "<br/><br/>";

echo "The word ‘Campers’ starts at position ";

echo $posWorld+ 1;

echo " in the first string.<br/><br/>";

// demonstrate the use of the concatenation operator
echo "We can concatenate the strings:<br/><br/>";
echo ($myText1) . " " . $myText2 . "\n";

?>

</BODY>

</HTML>


