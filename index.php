<?php
require_once("vendor/autoload.php");
use NumberToWords\NumberToWords;

interface TimeToWordConvertInterface{
    public static function convert(int $hours, int $minutes) : string;
}

class TimeToWordConvert implements TimeToWordConvertInterface
{

    public static function convert(int $hours, int $minutes): string
    {

        $numberToWords = new NumberToWords();

        $numberTransformer = $numberToWords->getNumberTransformer('en');

        $res1 = $numberTransformer->toWords($hours);

        $res2 = $numberTransformer->toWords($minutes);

        return $res1 . ' hours ' . $res2 . ' minutes.';
    }

}

$sa = TimeToWordConvert::convert(7,20);
echo strftime($sa);
readline();
?>