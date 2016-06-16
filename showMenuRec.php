<?php
function showMenu ($listMenu){
   $html = '<ul>';
   for ($i = 0; $i < count($listMenu); $i++) { 
       if (is_array($listMenu[$i][0])) {
            $html .= showMenu($listMenu[$i]);
       } else {
            $html .= '<li><a href = "'.$listMenu[$i][0].'">'.$listMenu[$i][1].'</a></li>';
       }
   }
   $html .= '</ul>';
   return $html;
}
$listMenu = [[
 'mainUrl', 
 'Main',
], [
 'AboutUsUrl', 
 'About us',
], [
 'ProductsUrl', 
 'Products',
], [[
    'ProductOneUrl', 
    'ProductOne', 
], [
    'ProductTwoUrl', 
    'ProductTwo', 
]], [
 'ContactsUrl', 
 'Contacts',
]]; 
echo showMenu($listMenu);   

