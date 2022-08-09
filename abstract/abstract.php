<?php

/**
 * Bir sýnýf sadece bir abstract sýnýfýndan türeyebilir.
 * public private protected tanýmlamalar yapýlabilir.
 * Soyut metotlar , sabitler ve özellikler tanýmlanabilir.
 */

abstract class GovernmentOffical
{
    abstract public function setName($firstName,$lastName);
    abstract public function calculateSalary(float $salary, int $experience);
    public function showInfo(){
        return $this->firstName . ' '.$this->lastName . ' ' . $this->totalSalary;
    }
}

class Teacher extends GovernmentOffical
{

    public function setName($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        return $firstName." ".$lastName;
        // TODO: Implement setName() method.
    }

    public function calculateSalary(float $salary, int $experience)
    {
        $this->totalSalary = ($experience * 100) + $salary;
    }
}

$teacher = new Teacher();
print $teacher->setName('Enes','ALTAN')."<br>";
$teacher->calculateSalary('14000','2')."<br>";
print $teacher->totalSalary."<br>";
print $teacher->showInfo()."<br>";
