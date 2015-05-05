<?php
/**
  * Author: Trevor Street
 * Date: 04/01/2015
 * Time: 19:07
 */

/**
 * @Class TimeCop
 * Purpose: A Class that handles the time values for tracking hours worked
 */
class TimeCop {
    private $lapsedTime;
    private $today;
    private $weekly;
    private $banked;
    private $hoursPerWeek;

    /**
     * @param $lapsedTime
     * @param $today
     * @param $weekly
     * @param $banked
     * @param $hoursPerWeek
     */
    public function __construct($lapsedTime, $today, $weekly, $banked, $hoursPerWeek)
    {
        $this->lapsedTime = $lapsedTime;
        $this->today = $today;
        $this->weekly = $weekly;
        $this->banked = $banked;
        $this->hoursPerWeek = $hoursPerWeek;
    }

    /**
     * Method: getLapsedTime
     * @return int
     */
    public function getlapsedTime()
    {
        return $this->lapsedTime;
    }

    /**
     * @param int $lapsed_time
     */
    public function setLapsedTime($lapsed_time)
    {
        $this->lapsedTime = $lapsed_time;
    }

    /**
     * @return int
     */
    public function getHoursWeek()
    {
        return $this->hoursPerWeek;
    }

    /**
     * @param int $hours_week
     */
    public function setHoursWeek($hours_week)
    {
        $this->hoursPerWeek = $hours_week;
    }

    /**
     * @return int
     */
    public function gettoday()
    {
        return $this->today;
    }

    /**
     * @internal param int $addedTime
     */
    public function settoday($addedTime)
    {
        $this->today += $addedTime;
    }

    public function resetToday()
    {
        $this->today = 0;
    }

    /**
     * @return int
     */
    public function getweekly()
    {
        return $this->weekly;
    }

    /**
     * @internal param int $addedTime
     */
    public function setweekly($addedTime)
    {
        $this->weekly += $addedTime;
    }

    public function resetWeekly()
    {
        $this->weekly = 0;
    }

    /**
     * @return int
     */
    public function getBanked()
    {
        return $this->banked;
    }

    /**
     * @internal param int $addedTime
     */
    public function setBanked($addedTime)
    {
        $this->banked += $addedTime;
    }

    public function resetBanked()
    {
        $this->banked = 0;
    }
}