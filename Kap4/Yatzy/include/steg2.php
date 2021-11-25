<p> Du har slagit alla slagen.<br>Dina tärningar visar:<br><br>
    
   <?php
 foreach($tarning as $key=>$value) {
        echo "<div class='tarningarna'><img src='bilder/dice_$value.png' height='25'><br></div>";
        echo "<input type='hidden' name='t_$key' value='$value'>";
        
     } 
  ?>
</p>
    Du fick ett <?= $resultat['resultat']; ?> Med värdet <?= $resultat['varde']; ?>
<form method="POST">
    <input type="submit" name="submit" value="Spela igen">
     <input type="submit" name="submit" value="Har du bättre saker att göra?">
</form>