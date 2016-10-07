<?php

/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09.09.2016
 * Time: 14:04
 */
class UtilsTest extends \PHPUnit\Framework\TestCase
{
    public function testSetIntervalDates()
    {
        $yesterday = date('Y-m-d H:i:s', strtotime('yesterday'));

        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_TODAY, $yesterday,
            $yesterday, true);
        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date('Y-m-d 00:00:00'),
            date('Y-m-d 23:59:59'),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testExceptionIsThrown()
    {
        $this->expectException(\Exception::class);
        \Generic\Utils::getDateIntervalByType('exception', null, null, true);
    }

    public function testIsLastMonth()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_LAST_MONTH, null,
            null, true);

        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date("Y-m-01 00:00:00", strtotime('last month')),
            date("Y-m-t 23:59:59", strtotime('last month')),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsThisMonth()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_THIS_MONTH, null,
            null, true);

        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date("Y-m-01 00:00:00"),
            date("Y-m-d 23:59:59"),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsLastWeek()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_LAST_WEEK, null,
            null, true);

        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date("Y-m-d 00:00:00", strtotime(date('l') == 'Sunday' ? 'Monday -2 week' : 'Monday last week')),
            date("Y-m-d 23:59:59", strtotime('sunday last week')),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsThisWeek()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_THIS_WEEK, null,
            null, true);

        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date("Y-m-d 00:00:00", strtotime(date('l') == 'Sunday' ? 'Monday last week' : 'Monday this week')),
            date("Y-m-d 23:59:59"),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsYesterday()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_YESTERDAY, null,
            null, true);
        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date('Y-m-d 00:00:00', strtotime('yesterday')),
            date('Y-m-d 23:59:59', strtotime('yesterday')),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsToday()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_TODAY, null, null,
            true);
        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date('Y-m-d 00:00:00'),
            date('Y-m-d 23:59:59'),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsAllTime()
    {
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_ALL_TIME, null, null,
            true);
        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date('Y-m-d 00:00:00', strtotime(\Generic\Utils::START_DATE_ALL_TIME)),
            date('Y-m-d 23:59:59'),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }

    public function testIsCustom()
    {
        $date = '2016-01-01';
        list($startDate, $endDate) = \Generic\Utils::getDateIntervalByType(\Generic\Utils::INTERVAL_CUSTOM, $date,
            $date, true);
        $testInterval = array(
            $startDate,
            $endDate,
        );
        $controlInterval = array(
            date('Y-m-d 00:00:00', strtotime($date)),
            date('Y-m-d 23:59:59', strtotime($date)),
        );

        $this->assertEquals($controlInterval, $testInterval, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10,
            $canonicalize = true);
    }
}
