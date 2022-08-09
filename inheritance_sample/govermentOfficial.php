<?php

class govermentOfficial{

    public $firstName,$lastName,$gender,$salary,$experience;

    public function __construct()
    {
        echo "Teacher Nesnesi Oluþturuldu!<br>";
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
    // govermentOfficial sýnýfýnda public tanýmlý bütün deðiþkenleri kullanabiliriz.
    public function __construct()
    {
        echo "Teacher Nesneni oluþturuldu.";
    }

    public function calculateSalary() //overwrite
    {
        return ($this->experience * 200) + $this->salary;
    }
    public function getParentCalculateSalary(){
        return $this->calculateSalary(); // Ayný sýnýftakini çaðýrýr.
        //return self::calculateSalary(); // Ayný sýnýftakini çaðýrýr.
        //return parent::calculateSalary();// Üst sýnýfýnýn fonk çaðýrýr.
        //return govermentOfficial::calculateSalary(); // Üst sýnýfýnýn fonk çaðýrýr.
    }
}

final class Math extends Teacher //Math sýnýfý bir daha türetilmemesini istiyosak baþýna final eklemeliyiz
{
    public static $dersicerik = "Diferansiyel";
    public $ders = "Trigonometri";

    const DERS_ADI = "Matematik";

    public static function giveLesson(){
     //Statik fonksiyonlarýn içinde sadece statik deðerlere ulaþýlabilir.
        //$this anahtar sözcüðü kullanýlamaz.

//        return $this->ders;
//        return $this->$dersicerik;
        return self::$dersicerik;
//        return self::DERS_ADI;
//        return self::$ders; // static olmadýðý için hata verir
    }
}
//static tanýmlamada ki amaç nesne oluþturmaya gerek yok , direkt çaðýrým yapýlabilir.
echo Math::giveLesson().PHP_EOL; //static bir fonksiyonu çaðýrmak istiyosak bu þekilde
echo Math::$dersicerik.PHP_EOL; // static bir deðiþkeni çaðýrmak için bu þekilde yazmalýyýz
//echo Math::$ders.PHP_EOL; // deðiþken static olmadýðý için alamayýz




$teacher = new Teacher();
$teacher->firstName = "ENES";
$teacher->lastName = "ALTAN";
$teacher->salary = "5000";
$teacher->gender = "Male";
$teacher->experience = "5";
echo $teacher->calculateSalary();