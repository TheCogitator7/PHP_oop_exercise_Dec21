// array
<h1>Functon style</h1>
<?php 
$adata=array('a', 'b', 'c');
array_push($adata, 'd');
foreach($adata as $item){
    echo $item.'<br>';
}
var_dump(count($adata));
?>

<h1>Object style</h1>
<?php 
$odata=new ArrayObject(array('a', 'b', 'c'));
$odata->append('d');
foreach($odata as $item){
    echo $item.'<br>';
}
var_dump($odata->count());
?>