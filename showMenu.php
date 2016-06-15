<?php
function showMenu ($listMenu){
   echo '<ul>';
   foreach($listMenu as $menuElement) 
   { 
       echo '<li><a href = "$menuElement[0]">'.$menuElement[1].'</a></li>';
   }
   echo '</ul>';
}

$listMenu = [['mainUrl', 'Main'], ['AboutUsUrl', 'About us'],['ProductsUrl', 'Products'], ['ContactsUrl', 'Contacts']]; 

showMenu($listMenu);   

?>

