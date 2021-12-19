<?php
$handle = fopen('./bookstore.xml','r');
$conteudo = fread ($handle, filesize ('./bookstore.xml'));

$xml = new SimpleXMLElement($conteudo);
foreach($xml -> children() as $child){
    echo "Livro: " . $child->asXML()."<br>";
}
fclose ($handle);
?>