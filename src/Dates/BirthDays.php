<?php
/**
 * Created by PhpStorm.
 * User: holod
 * Date: 2019-01-05
 * Time: 22:41
 */

namespace Morozov\Dates;


class BirthDays
{
    private $birthDate;
    private $todayDate;

 public function __construct($birthDate)
 {
     $this->$birthDate = $birthDate;
     $this->todayDate = date("Y-m-d");
 }

 public function findTotalDays()
 {
     $birthTime = strtotime($this->birthDate);
     $todayTime = strtotime($this->todayDate);

     $totalSecs = $todayTime - $birthTime;
     $totalDays = floor($totalSecs / 3600 / 24);
    return $totalDays;
 }


}