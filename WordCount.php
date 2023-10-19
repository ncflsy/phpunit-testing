<?php
class WordCount
{
    public function countWords($setence)
    {
        return count(explode(" ", $setence));
    }
}
