<?php
class multiplytable
{  
  public $limit;
  
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
echo"Input the number :";
$num=trim(fgets(STDIN));
$a=new multiplytable(10);
echo $a->calculate($num);
