<?php
namespace tests;
use PHPUnit\Framework\TestCase;

require './src/functions/findNumber.php';

class FindCountNumberTest extends TestCase
{
	/**
	 * @return array
	 */
	public function dividePositiveDataProvider()
	{
		return [
			[[3],1],
			[[1, 2, 3], 1],
			[[2, 3, 3.0], 2],
			[[3, 32, 43, 4, 5], 3],
			[[],0]
		];
	}
	/**
	 * @return array
	 */
	public function divideNegativeDataProvider()
	{
		return [
			['statatat3', 'Param must be array'],
			[['33', 3, 1, 2, 33], 'Value must be only number'],
			[[[3]], 'Value must be only number'],
			[['3', 32, 43, 4, 5], 'Value must be only number'],
			[['3'], 'Value must be only number'],
			[['333'], 'Value must be only number'],
			[[['3']], 'Value must be only number'],
		];
	}
	/**
	 * @dataProvider dividePositiveDataProvider
	 */
	public function testFunctionPositive($a, $expected)
	{
		$result = findCountNumber($a);
		$this->assertEquals($expected, $result);
	}
  
	/**
	 * @dataProvider divideNegativeDataProvider
	 */
	public function testDivideNegative($a, $expected)
	{
		$this->expectExceptionMessage($expected);
		$result = findCountNumber($a);
	}
}