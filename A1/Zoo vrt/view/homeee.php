<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("prognoza.xml");

$x=$xmlDoc->getElementsByTagName('NazivMesta');

for ($i=0; $i<=$x->length-1; $i++) {
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$vr=($y->childNodes);

for ($i=0;$i<$vr->length;$i++) {

  if ($vr->item($i)->nodeType==1) {
    echo("<b>" . $vr->item($i)->nodeName . ":</b> ");
    echo($vr->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?>
