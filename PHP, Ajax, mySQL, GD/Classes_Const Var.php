<?php

class Circle {
	const pi=3.141;
	
	public function Area($radius) {
		return self::pi*$radius*$radius;	//notice how you acces the const var (with self:: not $this->)
	}
}

$circle= new Circle;
echo $circle->Area(100);

?>