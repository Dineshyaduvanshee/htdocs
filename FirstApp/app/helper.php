<?php
//impotant functions
if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// if(!function_exists('get_formatted_data')){
//     function p($data,$formate){
//        $formatted_data = date($formate,strtotime($data));
//        return $formatted_data;
//     }
// }

?>