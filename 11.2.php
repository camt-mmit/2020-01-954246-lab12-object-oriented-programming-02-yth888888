<?php
$pricings = [
			[ 'unit' => 5,           'price' => 10, 'isWhole' => true ],
			[ 'unit' => 5,           'price' =>  3, 'isWhole' => false ],
			[ 'unit' => 5,           'price' =>  5, 'isWhole' => false ],
			[ 'unit' => PHP_INT_MAX, 'price' => 10, 'isWhole' => false ],
	        ];
echo "Input usage unit: ";
fscanf(STDIN, "%d", $unit);
class electricity
{
	private $pricings;
	function __construct($par1)
  {
    $this->pricings = $par1;
  }
	function calculate($unit)
	{
		$price = 0;
		for($i = 0; $unit > 0; $i++) 
		{
			$unitCal = ($unit > $this->pricings[$i]['unit'])? $this->pricings[$i]['unit'] : $unit;
			$price += ($this->pricings[$i]['isWhole'])? $this->pricings[$i]['price'] : $unitCal * $this->pricings[$i]['price'];
			$unit -= $unitCal;
		}
		return $price;
	}
}
$a=new electricity($pricings);
printf("price of electricity bill = %d\n", $a->calculate($unit));
