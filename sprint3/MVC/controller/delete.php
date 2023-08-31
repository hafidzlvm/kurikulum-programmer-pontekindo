<?php

function delete($delete){
    global $santri;    
    for($i = $delete; $i < count($santri); $i++){
        $santri[$i] = $santri[$i+1];           
    }
    unset($santri[count($santri)]);
}
