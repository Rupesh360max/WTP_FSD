<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //                      strstr()
    $str = "This is an Example of string in PHP is a Scripting Language";
    $value = "is";
    if(strstr($str, $value))
        echo "Found!!!";
    else
        echo "Not Found";
    echo "<br><hr>";


    $str = "This is an Example of string in PHP is a Scripting Language";
    $value = "was";
    $s1 = strstr($str, $value);
    if($s1)
        echo "Found!!!";
    else
        echo "Not Found";
    echo "<br><hr>";



                        // strpos()

    $str = "This PHP is an Example of string in PHP is a Scripting Language";
    echo strpos($str, "PHP")."<br>"; //PHP at 5 index start
    echo strpos($str, "PHP", 6)."<br><hr>";

                          //str_replace()
    
    $str = "This PHP is an Example of string in PHP is a Scripting Language";
    echo str_replace("PHP", "Javascript", $str);
    echo $s1. "<br>";
    $s1 = str_replace(array("a", "e", "i", "o", "u"), "#", $str);
    echo $s1;
    echo "<br><hr>";


                        // ucfirst()- first in uppercase
    
    $name = "rupesh kumar";
    echo ucfirst($name); // first letter in capital so here r => R
    echo "<br><hr>";

                          //ucword()
    
    $name = "rupesh kumar";
    $name = strtolower($name);// All in lower case
    echo $name. "<br>";
   
    echo ucfirst($name); // first letter in capital so here r => R
    echo "<br>";

    echo ucwords($name); // first letter in capital here r=> R and k=> K
    echo "<br>";

     $name = strtoupper($name); // All in upper case
    echo $name. "<br><hr>";



                    // str_shuffle()

    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ)123456789!@#$%^&*()_.";
    echo str_shuffle($str);
    $password = str_shuffle($str);
    $password = substr($password, 0, 8);
    echo "Your password is : $password <br><hr>";

    $num = "0123456789";
    $otp = substr(str_shuffle($num), 0, 6);
    echo "Your OTP is : $otp <br><hr>";


    $str = "PHP is a Scripting Language";
    $arr = str_split($str, 5);
    print_r($arr);
    echo "<br><hr>";


    $str = "PHP is a Scripting Language";  // on base of delimeter
    $arr = explode(" ", $str);
    print_r($arr);
    echo "<br><hr>";
    

    
    $arr = array("PHP", "is", "a", "case", "sensative", "Language");
    $str = implode("-", $arr);
    echo $str;
    echo "<br><hr>";
    

    
    echo ord("a");   // 97
    echo "<br>";
    echo ord("0");   // 48
    echo "<br>";
    echo ord("@");   // 64
    echo "<br><hr>";


    echo chr(65);   // A
    echo "<br>";
    echo chr(97);   // a
    echo "<br>";
    echo chr(48);   // 0
    echo "<br><hr>";
    


    $password = "abc";
    echo md5($password);
    echo "<br><hr>";


    $str = "PHP is a scripting language";
    echo strrev($str);



    ?>
</body>
</html>
