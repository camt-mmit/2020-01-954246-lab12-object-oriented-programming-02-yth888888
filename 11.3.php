<?php
echo"1. Multiplication Table\n";
echo"2. Electricity Bill calculation\n";
echo"3. exit\n";
class multiplytable
{  
  private $limit;
  
  function __construct($par1)
  {
    $this->limit = $par1;
  }
  
  function calculate($number)
  {
	for($i=1;$i<=$this->limit;$i++)
	{
		for($j=2;$j<=$number;$j++)
		{
			echo $i*$j." ";
		}
		echo"\n";
	}
  }
}

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
while(true)
{
echo"Input menu number: ";
$menu=trim(fgets(STDIN));
if($menu==1)
{
	echo"Input the number :";
	$num=trim(fgets(STDIN));
	$a=new multiplytable(10);
	echo $a->calculate($num);
}
elseif($menu==2)
{
	$pricings = [
			[ 'unit' => 5,           'price' => 10, 'isWhole' => true ],
			[ 'unit' => 5,           'price' =>  3, 'isWhole' => false ],
			[ 'unit' => 5,           'price' =>  5, 'isWhole' => false ],
			[ 'unit' => PHP_INT_MAX, 'price' => 10, 'isWhole' => false ],
	        ];
	echo "Input usage unit: ";
	fscanf(STDIN, "%d", $unit);
	$a=new electricity($pricings);
	printf("price of electricity bill = %d\n", $a->calculate($unit));
}
else
{
break;
}
}

