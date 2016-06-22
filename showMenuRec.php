<?php
function showMenu ($listMenu) {
   $html = '<ul>';
   for ($i = 0; $i < count($listMenu); $i++) {
       $html .='<li><a href = "'.$listMenu[$i]['url'].'">'.$listMenu[$i]['title'].'</a>';
       if ($listMenu[$i]['children']) {
            $html .= showMenu($listMenu[$i]['children']);
       }
	$html .= '</li>';
   }
   $html .= '</ul>';
   return $html;
}

$listMenu = [
[
    'url' => '/main', 
    'title' => 'Main',
], [
    'url' => '/news', 
    'title' => 'News',
    'children' => [[
         'url' => '/someNews', 
        'title' => 'Some news',
        'children' => [[
             'url' => '/someNewsOne', 
            'title' => 'Some news one',
         ], [
             'url' => '/someNewsTwo', 
            'title' => 'Some news two',
         ]],
    ], [
         'url' => '/anotherNews', 
        'title' => 'Another news',
    ]],
], [
    'url' => '/aboutUs', 
    'title' => 'About us',
], [
    'url' => '/Products', 
    'title' => 'Products',
    'children' => [[
         'url' => '/productOne', 
        'title' => 'Product one',
    ], [
         'url' => '/productTwo', 
        'title' => 'Product two',
    ], [
         'url' => '/productThree', 
        'title' => 'Product three',
    ]],
], [
    'url' => '/contacts', 
    'title' => 'Contacts',
]]; 

echo showMenu($listMenu);  
