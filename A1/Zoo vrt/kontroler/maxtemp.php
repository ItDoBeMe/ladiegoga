<?php
$xml = new SimpleXMLElement('prognoza.xml', 0, TRUE);
echo('<pre>');
//var_dump($xml);
echo('</pre>');
?>
<table border="1">
  <thead>
    <tr>
      <th>Naziv grada: </th>
      <th>Maksimalna temperatura: </th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($xml->Prognoza as $pr) :?>
    <tr>
      <td><?php echo $pr->NazivMesta; ?></td>
      <td><?php echo $pr->MaxTemperatura."℃"; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<style>
  th,td{
    color: black;
  }
</style>