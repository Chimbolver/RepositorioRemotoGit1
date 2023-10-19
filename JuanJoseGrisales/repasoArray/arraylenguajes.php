<?php

$languages = array();

$languages['Python'] = array(
    "first_release" => "1991",
    "latest_release" => "3.8.0",
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py",
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);



$languages['PHP'] = array(
    "first_release" => "1995",
    "latest_release" => "7.3.11",
    "designed_by" => "Rasmus Lerdorf",
    "description" => array(
        "extension" => ".php",
        "typing_discipline" => "Dynamic, weak",
        "license" => "PHP License (most of Zend engine 
             under Zend Engine License)"
    )
);
$languages['JAVA'] = array(
    "first_release" => "1995",
    "latest_release" => "Java 21 or JDK 21",
    "designed_by" => "James Gosling",
    "description" => array(
        "extension" => ".java",
        "typing_discipline" => "Dynamic, weak",
        "license" => "JAVA License ( Oracle Technology Network License Agreement )"
    )
);

echo " La licencia de php es : " . $languages['PHP']['description']['license'] . "<br><br>";
echo "La lista de de los lenguajes con su autor es: <br>";
foreach ($languages as $x => $v) {
    echo " <tab> -".$x . " autor :" . $v['designed_by'] . "<br>";
}

?>