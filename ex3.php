<html>
    
    <head><title>Exercice 3</title></head>

    <body>
        <?php
                $Table[0] = array ("Nom" => "Huet", "Prénom" => "Killyan", "MDP" => "1234");
                $Table[1] = array ("Nom" => "Jolibois", "Prénom" => "Maxence", "MDP" => "5678");
                $Table[2] = array ("Nom" => "Dupontreue",  "Prénom" =>  "Theo", "MDP" => "7654");
        
                echo "<table>";

                for ($i = 0; $i <3; $i++) {
            
    
                    echo "<tr></tr>";
            
        
                foreach ($Table[$i] as $value) {
            
                    echo "<td>";
                    echo "$value";
                }
            }
                echo "</table>";

            ?>

            <a href="/php/huet/">Accueil</a>

    </body>

</html>