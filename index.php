<?php
    // ESERCIZIO 1
    $today_date = date("l, jS F Y");
    echo $today_date;
?>  
    
<?php 
    //ESERCIZIO 2
    $teams = [
        "Inter" => ["Lautaro Martinez", "Nicolò Barella", "Alessandro Bastoni", "Achraf Hakimi", "Roberto Gagliardini"],
        "Juventus" => ["Paulo Dybala", "Federico Chiesa", "Dusan Vlahovic", "Luca Pellegrini", "Daniele Rugani"],
        "Milan" => ["Rafael Leao", "Sandro Tonali", "Alessio Romagnoli", "Theo Hernandez", "Brahim Diaz"],
    ]
?>

<?php
    echo "<h3>Squadre</h3>";
    foreach($teams as $category => $team_list) { ?>
    
        <ul>
            <?= "$category:" ?> 
            <?php foreach($team_list as $players) { ?>
                <?= "<li>$players</li>" ?>
            <?php } ?>
        </ul> <?php
    } ?>
