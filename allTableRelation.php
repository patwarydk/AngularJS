<?php
	require_once("db.php");
	header('Content-Type: application/json');
	 
	$sql = "select product.id, product.title, product.description, product.price, subcategory.name sname, brand.name bname, category.name cname 	
			from product, subcategory, brand, category
			where product.subcategoryid = subcategory.id and
				  product.brandid = brand.id and
				  subcategory.categoryid = category.id
			order by product.id desc";
	$sql = $db->query($sql);
	while($dt = $sql->fetch_assoc()){
		$data[] = $dt;
	}
	 echo json_encode($data);
?>