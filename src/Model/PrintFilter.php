<?php

namespace Model;

class PrintFilter
{
    public $project;
    public $year;
    public $dayMonth;
    public $tour;

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getDayMonth()
    {
        return $this->dayMonth;
    }

    /**
     * @param mixed $dayMonth
     */
    public function setDayMonth($dayMonth)
    {
        $this->dayMonth = $dayMonth;
    }

    /**
     * @return mixed
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * @param mixed $tour
     */
    public function setTour($tour)
    {
        $this->tour = $tour;
    }


}