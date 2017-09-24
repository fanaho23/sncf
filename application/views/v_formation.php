<html>

    <body>
        <h1>Les formations</h1>
            <?php 
               foreach($lesFormations as $formation){  
            ?>
            <a href="<?php echo base_url();?>index.php/CtrlSncf/AfficherLesAgents/<?php echo $formation->code; ?>"><?php echo $formation->intitule; ?></a><br>
            <?php 
             }
            ?>

    </body>
</html>          
<!--Il faut crée un une view pour les agents, et un model-->