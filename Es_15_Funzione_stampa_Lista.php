<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa lista</title>
</head>
<body>
    
    <?php 
        
        function stampaLista($num, $tipolista){
            if ($tipolista == "o") {
                $tipo = "ol";
            } elseif ($tipolista == "u") {
                $tipo = "ul";
            } else {
                echo "errore";
            }
            
            $str="<".$tipo.">";
            for ($i=1; $i <= $num; $i++) { 
                if($i%5==0){
                    $str=$str."<li>".$i."</li>";
                }      
            }
            $str=$str . "</".$tipo.">";
            return $str;
        }
        $lista = stampaLista(40,"u");
        echo "$lista";
    
    ?>
</body>