# phpunit-testing
<h1> File WordCount.php </h1>
<?php
class WordCount
{
    // ini merupakan progam untuk melakukan function bernama countWords yang akan berfungsi untuk melakukan perhitungan kata dalam parameter yagn dimasukan
    public function countWords($setence)
    {
        //progam ini akan mengembalikan nilai hitungan yang mana kalimat akan diambil dari parameter yang dimasukan, kemudian antar kata dalam kalimat tersebut akan dipisahkan dengan " " (spasi) agar tidak tergabung menjadi satu kata
        return count(explode(" ", $setence));
    }
}
?>
<h1> File SimpleTest.php </h1>
<?php
// code ini berfungsi untuk melakukan pemanggilan testcase
use PHPUnit\Framework\TestCase;

//code dibawah ini bertujuan agar ketika menjalankan progam ini harus memerlukan file bernama WordCount.php, sehingga tanpa ada progam atau file tersebut maka akan terjadi error
require_once "WordCount.php";

//mendeklarasikan class bernama SimpleTest yang melakukan extend TestCase
class SimpleTest extends TestCase
{
    // Dalam class SimpleTest terdapat function bernama testCountWords yang bertujuan untuk melakukan testing
    public function testCountWords()
    {
        // mendekarasikan kelas WordCount ke dalam variabel baru bernama $Wc
        $Wc = new WordCount();

        // Membuat variabel string yang berisikan text pengujian. pada kasus ini saya menggunakan klimat "my name is joko widodo" yang mana kalimat tersebut terdiri dari 5 kata
        $TestSetence = "My name is joko widodo";

        // pada kode dibawah ini mendeklarasikan variabel bernama WordCount yang berisikan hasil dari  pemanggilan function countWords pada colass WordCount dengan parameter variabel TestSetence ("My name is joko widodo"). hasil dari function tersebut akan menghasilkan angka
        $WordCount = $Wc->countWords($TestSetence);

        //angkat yang sudah ditampung ke dalam wordcount tadi akan dibandingkan dengan method assertEquals. apabila pada parameter pertama (5) sama dengan nilai parameter kedua (yang mana nilai dari parameter WordCount adalah 5) maka test akan berhasil atau menampilkan tulisan "OK". sebaliknya, apabila para parameter pertama (5) tidak sama dengan nilai varibel pada parameter kedua maka akan menghasilkan tulisan "Failures"
        $this->assertEquals(5, $WordCount);
    }
}
?>
