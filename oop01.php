<?php

class Person
{
    //Özellikler

    /*
     * public => Oluþturulan deðiþkenlere ve fonksiyonlara her yerden ulaþýlabilir.
     * private => Sadece tanýmlandýðý sýnýf içerisinden ulaþýlabilir.
     * protected => Sadece tanýmlandýðý sýnýf ve kalýtýmýn yapýldýðý sýnýflarda kullanýlýr.
     *
     */

    public $firstName = "Enes";
    public $lastName = "ALTAN";
    public $age = 27;

    const PHONE = '5309533166';

    private $birthdate = "31/07/1995";
    protected $height = '175 cm';

    /*
     * Methodlar
     */
    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function getPhone()
    {
        return self::PHONE; // self sýnýfýn kendisini baz alýr
    }

    public function calculateSalary(float $salary , $experience):float{
        return ($experience * 100)+$salary;
    }


    public function __construct()
    {
        //Sýnýf çaðrýldýðýnda çalýþacak ilk method
        echo "Construct(Kurucu) Method çalýþtýr.<br>";

    }

    public function __destruct()
    {
        // //Sýnýf çalýþmasý bittiðinde çalýþacak son method
        echo "Destruct(Yýkýcý) Method çalýþtýr.<br>";
    }
}
$person = new Person();
echo $person->firstName . " " . $person->lastName . PHP_EOL;// PHP_EOL -> /n;
echo $person::PHONE . PHP_EOL; // sabitleri bu þekilde çaðrýlýr.

echo $person->getFullName();
echo $person->getPhone();
echo $person->calculateSalary('1000','5');