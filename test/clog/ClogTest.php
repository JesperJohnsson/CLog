<?php
namespace phpe\Log;
/**
* Class to log what happens.
*
*
*/
class CLogTest extends \PHPUnit_Framework_TestCase
{
    public function testClog()
    {
        $el = new \jejd14\clog\CLog();
        $el->Timestamp(__CLASS__, __METHOD__, 'Init anax');
        $el->Timestamp(__CLASS__, __METHOD__, '2nd anax');
        $el->Timestamp(__CLASS__, __METHOD__, '3nd anax');
        $string = $el->TimestampAsTable();
        $this->assertContainsOnly('string', array($string));
    }
}
