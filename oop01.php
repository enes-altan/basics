<?php
class Person
{
    //�zellikler

    /*
     * public => Olu�turulan de�i�kenlere ve fonksiyonlara her yerden ula��labilir.
     * private => Sadece tan�mland��� s�n�f i�erisinden ula��labilir.
     * protected => Sadece tan�mland��� s�n�f ve kal�t�m�n yap�ld��� s�n�flarda kullan�l�r.
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
        return self::PHONE; // self s�n�f�n kendisini baz al�r
    }
}
$person = new Person();
echo $person->firstName." ".$person->lastName . PHP_EOL;// PHP_EOL -> /n;
echo $person::PHONE. PHP_EOL; // sabitleri bu �ekilde �a�r�l�r.

echo $person->getFullName();
echo $person->getPhone();