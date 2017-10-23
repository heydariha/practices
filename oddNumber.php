 <?php

/*
*  
* get the number which occurs odd times in the source array  
*
* @param $arrValues array  
* @return int  
*/ 

function getOddNumber($srcValues) { 

	$res = array_count_values($srcValues);
	
	foreach($res as $num=>$ind)
	{
		$tmp = $ind%2;
		if($tmp <> 0)
			return $num;
	}

}

class OddNumberTest extends \PHPUnit_Framework_TestCase 
{
	public function testOddNumber()
	{         
		$result = getOddNumber([2,5,9,1,5,1,8,2,8]);         
		$this->assertEquals(9,$result);         
		$result = getOddNumber([2,3,4,3,1,4,5,1,4,2,5]);        
		$this->assertEquals(4,$result);
	}
} 