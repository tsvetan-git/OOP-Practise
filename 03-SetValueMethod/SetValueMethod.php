<?php
class SetValueMethod
{
	protected $value;
	
	public function setValue($value){
		
		$value = (array)$value; //string to string, int to sting, array to array 
		$this->value = implode(', ', $value);
		return $this;
		
		/* 
		 if (is_string($value)){
		 $this->value = $value;
		 }else if (is_array($value)){
		 $this->value = implode(', ', $value);
		 }else{
		 throw new Exception('@ set value must be string or array, current type is: '.gettype($value).' @'.PHP_EOL);
		 } 
		 */
	}

	public function getValue(){
		return $this->value;
	}
}

$test =  new SetValueMethod();
/*
//int
$test->setValue(1234);
//sting
$test->setValue('test');
*/
//array
$test->setValue(['value1','value2']);

var_dump($test);