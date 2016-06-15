<?php
function showMenu ($listMenu){
   $html = '<ul>';
   foreach ($listMenu as $menuElement) { 
       $html .= '<li><a href = "'.$menuElement['url'].'">'.$menuElement['title'].'</a></li>';
   }
   $html .= '</ul>';
   
   return $html;
}

$listMenu = [[
    'url' => 'mainUrl', 
    'title' => 'Main',
 ], [
    'url' => 'AboutUsUrl', 
    'title' => 'About us',
 ], [
    'url' => 'ProductsUrl', 
    'title' => 'Products',
], [
    'url' => 'ContactsUrl', 
    'title' => 'Contacts',
]]; 

echo showMenu($listMenu);   



