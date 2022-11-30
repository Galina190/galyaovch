<?php
	$products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
        [
            'name'   => 'выпечка',
            'price'    => 34,
            'amount' => 400,
        ]
	];
    foreach ($products as $products) {
		echo "Наименование продукта:" .$products['name'] . ', цена за ед: ' . $products['price'] . 'руб, в наличии: ' . $products ['amount']. '<br>' ;
	}
?>