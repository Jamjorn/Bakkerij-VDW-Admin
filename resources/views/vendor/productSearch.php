<?php
if(!isset($_REQUEST['term']))

DB::()
$rs = mysql_query('
	SELECT * FROM loc_regions 
	WHERE name_region 
	LIKE "'.ucfirst($_REQUEST['term']).'%" 
	ORDER BY id_region ASC 
	LIMIT 0,10', $dblink
);
$data = array();
while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
	$data[] = array(
		'label' => $row['name_region'],
		'value' => $row['name_region'],
	);	
}
echo json_encode($data);
flush(); 