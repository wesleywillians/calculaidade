<?php

namespace App;

class Sample {

    private $dob;
    private $currentYear;

    public function __construct($dob, $currentYear) {
        $this->dob = $dob;
        $this->currentYear = $currentYear;
    }

    public function getDob() {
        return $this->dob;
    }

    public function setDob($dob) {
        $this->dob = $dob;
    }

    public function getAge() 
    {
        return $this->currentYear->diff($this->dob)->format("%y");
    }

    public function getCurrentYear() {
        return $this->currentYear;
    }

    public function setCurrentYear($year) {
        $this->currentYear = $year;
    }

}
