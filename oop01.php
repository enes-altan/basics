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
    public  function getFullName(){
        return $this->firstName." ".$this->lastName;
    }

    public function getPhone(){
        return self::PHONE; // self sýnýfýn kendisini baz alýr
    }
}
$person = new Person();
echo $person->firstName." ".$person->lastName . PHP_EOL;// PHP_EOL -> /n;
echo $person::PHONE. PHP_EOL; // sabitleri bu þekilde çaðrýlýr.

echo $person->getFullName();
echo $person->getPhone();