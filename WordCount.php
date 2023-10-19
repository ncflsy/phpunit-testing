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
