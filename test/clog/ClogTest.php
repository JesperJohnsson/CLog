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
        $el->timestamp(__CLASS__, __METHOD__, 'Init anax');
        $el->timestamp(__CLASS__, __METHOD__, '2nd anax');
        $el->timestamp(__CLASS__, __METHOD__, '3nd anax');
        $string = $el->timestampAsTable();
        $this->assertContainsOnly('string', array($string));
    }

    public function testPageLoadTimeClog()
    {
        $el = new \jejd14\clog\CLog();
        $el->timestamp(__CLASS__, __METHOD__, 'Init anax');
        $string = $el->pageLoadTime();
        $this->assertContainsOnly('string', array($string));
    }

    public function testMemoryPeakClog()
    {
        $el = new \jejd14\clog\CLog();
        $el->timestamp(__CLASS__, __METHOD__, 'Init anax');
        $string = $el->memoryPeak();
        $this->assertContainsOnly('string', array($string));
    }

}
