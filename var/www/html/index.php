<h1>Hello, php!</h1>

<?php
$queryString = $_SERVER['QUERY_STRING'];

$queryData = array();

parse_str($queryString, $queryData);

?>

<pre>
<?php
print($queryString);
print_r($queryData)
?>
</pre>

