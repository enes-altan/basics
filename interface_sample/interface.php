<?php
/**
 * interface GovernmentOfficial
 *
 * interface yaln�zca public de�erler tan�mlanabilir.
 * Ayn� s�n�f �zerinde birden fazla Interface kullan�labilir.
 * Sabit de�i�kenler ve soyut metotlar tan�mlabilir.
 *
 */



interface GovernmentOfficial{

    const FULLNAME = "ENES ALTAN";

    /**
     * Soyut bir method; burada interface olarak olu�turdu�umuz
     * GovernmentOfficial e�er herhangi bir class �n i�ine interface edilirse
     * Bu fonksiyonu kullanmak zorunda
     **/

    public function fullName();
    public function setName($name);
    public function calculateSalary(float $salary, int $experience);
}

interface Test{
    public function test();
}

class Teacher implements GovernmentOfficial,Test
{

    public function fullName()
    {
        return self::FULLNAME;
    }

    public function setName($name)
    {
        $this->name = $name;
        // TODO: Implement setName() method.
    }

    public function calculateSalary(float $salary, int $experience)
    {
        return ($experience * 100) + $salary;
        // TODO: Implement calculateSalary() method.
    }

    public function test()
    {
    }
}

$teacher = new Teacher();
$teacher->setName("Esma");
print $teacher->name."\r\n";
print $teacher->calculateSalary(2500,3)."\r\n";
print $teacher->fullName()."\r\n";