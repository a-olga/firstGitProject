<?php
function showMenu ($listMenu){
   echo '<ul>';
   foreach($listMenu as $menuElement) 
   { 
       echo '<li>'.$menuElement[1].'</li>';
   }
   echo '</ul>';
}

$listMenu = [['mainUrl', 'Main'], ['AboutUsUrl', 'About us'],['ProductsUrl', 'Products'], ['ContactsUrl', 'Contacts']]; 

showMenu($listMenu);   

?>

