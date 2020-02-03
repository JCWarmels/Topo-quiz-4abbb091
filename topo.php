<?php
$array = [
    "Japan"=>"Tokyo",
    "Mexico"=>"Mexico City",
    "USA"=>"Washington D.C.",
    "India"=>"New Delhi",
    "Zuid-Korea"=>"Seoul",
    "China"=>"Peking",
    "Nigeria"=> "Abuja",
    "Argentina"=>"Buenos Aires",
    "Egypt"=>"Cairo",
    "UK"=>"London"
];
$goed = 0;
foreach($array as $land=>$stad){
    echo("Welke hoofdstad heeft ".$land."?".PHP_EOL);
    $answer = readline();
    if($answer == $stad){
        echo("Correct!".PHP_EOL);
        $goed++;
}
    else if($answer != $stad){
        echo("Fout!".PHP_EOL);
        $goed--;
}
}
echo("Je hebt er ".$goed." van de 10.");
