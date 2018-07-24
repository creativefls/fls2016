<?php
class Target_model extends CI_Model {
    function TargetCountByProject($project_id){
        $query = $this->db->query("SELECT send_id FROM `sendmail` WHERE project_id=".$project_id);
        return $query->num_rows();
    }
    
    function GetTargetListByProject($project_id,$status){
        $query = $this->db->query("SELECT * FROM `sendmail` WHERE project_id=".$project_id." AND send_status='$status'");
        return $query->result_array();
    }
    
    function GetProjectInfo($project_id){
        $query = $this->db->query("SELECT * FROM `project` NATURAL JOIN `client` WHERE project_id=1");
        return $query->row_array();
    }
    
    function get_target($project_id,$count){
        $query = $this->db->query("SELECT * FROM `sendmail` WHERE send_status='queued' AND project_id=$project_id LIMIT $count");
        return $query->result_array();
    }
    
    function send_email($send_target,$send_id,$subject,$message){
        $subject = "$subject";
        $message = "<p>$message</p>";

        $body ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>'.htmlspecialchars($subject, ENT_QUOTES, $this->email->charset).'</title>
                <style type="text/css">
                    body {
                        font-family: Arial, Verdana, Helvetica, sans-serif;
                        font-size: 16px;
                    }
                </style>
                </head>
                <body>
                '.$message.'
                </body>
                </html>';
        // Also, for getting full html you may use the following internal method:
        //$body = $this->email->full_html($subject, $message);

        $result = $this->email
            ->from('b@sekawancast.uni.me')
            ->to($send_target)
            ->subject($subject)
            ->message($body)
            ->send();

        if($result == true){
            //$this->db->update("sendmail",array("send_status" => "sent"),array("send_id",$send_id));
            $query = $this->db->query("update sendmail set send_status='sent' WHERE send_id=".$send_id);
        }
        return $result;
    }
}