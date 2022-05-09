<?php

function Log_Helper($log_action, $log_description){
    date_default_timezone_set('Asia/Tokyo');

    $CI =& get_instance();
 
    // paramter
    $param['log_user'] = $CI->session->userdata('user_id');
    $param['log_date'] = date('Y-m-d');
    $param['log_time'] = date('H:i:s');
    $param['log_action'] = $log_action;
    $param['log_description']= $log_description;
 
 
    //load model log
    $CI->load->model('Log_Model');
 
    //save to database
    $CI->Log_Model->save_log($param);
 
}
