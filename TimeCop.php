<?php
/**
  * Author: Trevor
 * Date: 04/01/2015
 * Time: 19:07
 */

class TimeCop {
    private $lapsedTime = 0;
    private $today = 0;
    private $weekly = 0;
    private $banked = 0;
    private $hoursPerWeek = 0;

    /**
     * @return int
     */
    public function getlapsedTime()
    {
        return $this->lapsedTime;
    }

    /**
     * @param int $lapsed_time
     */
    public function setlapsedTime($lapsed_time)
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
        $this->hoursPerWeekeek = $hours_week;
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