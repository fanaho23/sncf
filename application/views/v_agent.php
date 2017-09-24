<html>
    <body>
    <h1>Les Agents48</h1>

<?php
foreach ($LesAgents as $agent) {
    ?>
<a href="<?php echo base_url();?>index.php/CtrlSncf/AfficherLesFormations/AfficherLesAgents/"<?php echo $agent->nom; ?>><?php echo $agent>prenom; ?></a><br>
    
   
<?php    
}
?>
<!-- test-->
    </body>
</html>