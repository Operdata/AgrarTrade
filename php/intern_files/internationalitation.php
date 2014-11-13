<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$intern = simplexml_load_file('../../souces/languages/languages.xml');

echo ('<pre>');

foreach ($intern->Menu as $menu){
    
    echo '', $menu->tierr_venta.'<br>';
    
}
echo ('</pre>');
?>