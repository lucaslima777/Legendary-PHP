<?php

//Create XML
$xml = new SimpleXMLElement('<Application></Application>');

$list_languages = [
    'Java',
    'Kotlin',
    'C++',
    'HTML',
    'CSS',
    'JavaScript',
    'PHP',
    'C#',
    'Cobol',
    'SQL'
];

foreach ($list_languages as $language) {
    $xml->list_languages->language[] = $language;
}

//List in web page xml mode
header('Content-Type: application/xml');

//Convert in XML
echo $xml->asXML();
?>