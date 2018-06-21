<?php
namespace tests;
use PHPUnit\Framework\TestCase;

require './src/functions/findMaxElement.php';

class FindMaxElementTest extends TestCase
{
	/**
	 * @return array
	 */
	public function dividePositiveDataProvider()
	{
		return [
			[[1, 2, 3], 3],
			[[3.0,4,66.7],66.7],


		];
	}
	/**
	 * @return array
	 */
	public function divideNegativeDataProvider()
	{
		return [
			[1, 'Param must be array'],
			[['hello', 1, 33], 'Value must be only number'],
			[[],'Array can\'t be empty']
		];
	}
	/**
	 * @dataProvider dividePositiveDataProvider
	 */
	public function testFunctionPositive($a, $expected)
	{
		$result = findMaxElement($a);
		$this->assertEquals($expected, $result);
	}
	/**
	 * @dataProvider divideNegativeDataProvider
	 */
	public function testDivideNegative($a, $expected)
	{
		$this->expectExceptionMessage($expected);
		$result = findMaxElement($a);
	}


}