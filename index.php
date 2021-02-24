<?php echo "Hello world!" ?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <?php
     print('Masyvai vienmaciai'); 
     print ("<br>");
     print ("<br>");
        $pajamosPamenesiui = [1000, 2000, 1850, 680, 320, 3768, 4930, 4930, 5200, 1200, 5567, 5790];
        print_r($pajamosPamenesiui); 
        print ("<br>");

        array_push($pajamosPamenesiui, 12920);
        print_r($pajamosPamenesiui); 
        print ("<br>");

        $metinesPajamos = array_sum($pajamosPamenesiui);
        print_r("Metines pajamos  " . $metinesPajamos); 
        print ("<br>");

        print("Maziausios menesio pajamos  " . min($pajamosPamenesiui) ."<br>");
        print("Didziausios menesio pajamos  " . max($pajamosPamenesiui) ."<br>");
        print "<br>";

    print('Masyvai dvimaciai'); 
     print ("<br>");
     print ("<br>");

        $zodynas = [
            "mokausi" => "learning",
            "programuoti" => "to code",
        ];
        print_r($zodynas); 
        print ("<br>");
        print_r(array_keys($zodynas));
        print ("<br>");
        $zodynas2 = [
            "dar tik" => "only"
        ];

        array_splice($zodynas, 0, 0, $zodynas2);
        array_push($zodynas, "PHP" );
        print_r($zodynas);
        print "<br>";
        print "<br>";

    print('Liftas'); 
    print ("<br>");
    print ("<br>");
        /* Sukurkite asociatyvųjį masyvą, kuris reprezentuotų žmogų ir jo svorį ( “vardas1” => “svoris1”, “vardas2” => “svoris2” … ) ir:
        Raskite lengviausią žmogų (minimumas);
        Sunkiausią (maximumas);
        Susumuokite visų žmonių svorį ir nustatykite ar jie gali kilti liftu (500kg ar kita riba);
        * Atspausdinkite surikiuotus žmones (pagal svorį);*/
      
        $keleiviuSvoriai = [
            "Ona" => 58,
            "Dzeimsas" => 103,
            "Genute" => 88,
            "Robertas" => 18,
            "Asta" => 130
        ];

        print_r($keleiviuSvoriai); 
        print ("<br>");
        
        print("Lengviausias keleivis " . min($keleiviuSvoriai) ." kg" ."<br>");
        print("Sunkiausias keleivis " . max($keleiviuSvoriai) ." kg" ."<br>");
        print("Keleivių svorių suma " . array_sum($keleiviuSvoriai) ." kg" ."<br>");

        if (array_sum($keleiviuSvoriai)>500) 
            print("Keleivių svorių suma per didelė keltis liftu. Maksimalus svoris 500" ."<br>");
        else 
            print("Galima keltis liftu" ."<br>");
            print "<br>";
            print "<br>";
        asort($keleiviuSvoriai);

        print("Keleiviai pagal didėjantį svorį:" ."<br>");

        foreach($keleiviuSvoriai as $x => $x_value) {
            print $x . " " . $x_value . " kg";
            print "<br>";
        }
        

    ?>
</body>
</html>


