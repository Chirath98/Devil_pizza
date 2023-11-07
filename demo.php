<?php
$pages = glob('pages/*.php',GLOB_BRACE);
foreach ($pages as $page){
    //echo $page;
    echo '<br>';
    echo str_replace('.php','',(str_replace('pages/','',$page.(str_replace('pages/Food_Search.php','',''))))).'</a>';
    
}                               
?>