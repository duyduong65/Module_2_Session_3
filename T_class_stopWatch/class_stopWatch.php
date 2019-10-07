<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->endTime = microtime(true);
    }

    public function getElapsedTime()
    {
        return $this->getEndTime() - $this->getStartTime();
    }
}


