<?php

$MultiDArray= array('Healthy'=> array('Salad','Vegetables','Pasta'),
					'Unhealthy'=> array('Pizza','Ice Cream','French Fries')
					);

foreach($MultiDArray as $element=>$inner_element) {
	echo '<strong>'.$element.'</strong></br>';
	foreach($inner_element as $item)
		echo $item.'</br>';
		}

?>