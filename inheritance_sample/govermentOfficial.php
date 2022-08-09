<?php

class govermentOfficial{

    public $firstName,$lastName,$gender,$salary,$experience;

    public function __construct()
    {
        echo "Teacher Nesnesi Olu�turuldu!<br>";
    }
    /**
     * @return mixed
     */
    public function calculateSalary()
    {
        return ($this->experience * 100) + $this->salary;
    }

}

class Teacher extends govermentOfficial{
    // govermentOfficial s�n�f�nda public tan�ml� b�t�n de�i�kenleri kullanabiliriz.
    public function __construct()
    {
        echo "Teacher Nesneni olu�turuldu.";
    }

    public function calculateSalary() //overwrite
    {
        return ($this->experience * 200) + $this->salary;
    }
    public function getParentCalculateSalary(){
        return $this->calculateSalary(); // Ayn� s�n�ftakini �a��r�r.
        //return self::calculateSalary(); // Ayn� s�n�ftakini �a��r�r.
        //return parent::calculateSalary();// �st s�n�f�n�n fonk �a��r�r.
        //return govermentOfficial::calculateSalary(); // �st s�n�f�n�n fonk �a��r�r.
    }
}

final class Math extends Teacher //Math s�n�f� bir daha t�retilmemesini istiyosak ba��na final eklemeliyiz
{
    public static $dersicerik = "Diferansiyel";
    public $ders = "Trigonometri";

    const DERS_ADI = "Matematik";

    public static function giveLesson(){
     //Statik fonksiyonlar�n i�inde sadece statik de�erlere ula��labilir.
        //$this anahtar s�zc��� kullan�lamaz.

//        return $this->ders;
//        return $this->$dersicerik;
        return self::$dersicerik;
//        return self::DERS_ADI;
//        return self::$ders; // static olmad��� i�in hata verir
    }
}
//static tan�mlamada ki ama� nesne olu�turmaya gerek yok , direkt �a��r�m yap�labilir.
echo Math::giveLesson().PHP_EOL; //static bir fonksiyonu �a��rmak istiyosak bu �ekilde
echo Math::$dersicerik.PHP_EOL; // static bir de�i�keni �a��rmak i�in bu �ekilde yazmal�y�z
//echo Math::$ders.PHP_EOL; // de�i�ken static olmad��� i�in alamay�z




$teacher = new Teacher();
$teacher->firstName = "ENES";
$teacher->lastName = "ALTAN";
$teacher->salary = "5000";
$teacher->gender = "Male";
$teacher->experience = "5";
echo $teacher->calculateSalary();