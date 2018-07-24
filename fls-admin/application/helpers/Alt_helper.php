<?php
if(!function_exists(‘call_mod_func’)){
    function alt_model($model_name, $function_name, $parameters=null){
        $ci = &get_instance();
        $ci->load->model($model_name);
        return $ci->$model_name->$function_name($parameters);
    }
}