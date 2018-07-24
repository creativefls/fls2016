<?php
    class ALTForm{
        public $cancel_caption = "Cancel";
        public $delete_caption = "Hapus";
        
        function ajaxButtonCancel(){
            return "<button type=\"submit\" class=\"btn btn-default\" data-dismiss=\"modal\">
                        $this->cancel_caption
                    </button>";    
        }
        
        function ajaxButtonDelete($name){
            return "<button type=\"submit\" class=\"btn btn-danger pull-left\" name=\"$name\">
                        <i class=\"fa fa-times\"></i> $this->delete_caption
                    </button>";
        }
        
        function ajaxButtonAdd($name,$caption){
            return "<button type=\"submit\" class=\"btn btn-primary pull-left\" name=\"$name\" value=\"1\" >
                        <i class=\"fa fa-plus\"></i> $caption
                    </button>";
        }
        
        function ajaxButtonSave($name,$caption){
            return "<button type=\"submit\" class=\"btn btn-primary pull-left\" name=\"$name\">
                        <i class=\"fa fa-save fa-fw\"></i> $caption
                    </button>";
        }
        function buttonAdd($name,$caption){
            return "<div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\" name=\"$name\">
                            <i class=\"fa fa-plus\"></i> $caption
                        </button>
                    </div>";    
        }
        function inputFile($name,$title){
            return "<div class=\"form-group\">
                            <label>$title</label>
                            <input type=\"file\" name=\"$name\" />
                        </div>";
        }
        /**
         * ALTForm::inputHidden()
         * 
         * @param Nama Input $name
         * @param Isi input hidden $value
         * @return input hidden HTML
         */
        function inputHidden($name,$value){
            return "<input type=\"hidden\" name=\"$name\" value=\"$value\" />";
        }
        
        function inputGroupPassword($name,$title,$placeholder,$icon,$value,$requ){
            return "<div class=\"form-group\">
                        <label for=\"$name\">$title</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"$icon\"></i>
                            </div>
                            <input type=\"password\" class=\"form-control\" id=\"$name\" name=\"$name\" placeholder=\"$placeholder\"  value=\"$value\" $requ />
                        </div>
                    </div>";
        }
        
        function inputGroupText($name,$title,$placeholder,$icon,$value,$requ){
            return "<div class=\"form-group\">
                        <label for=\"$name\">$title</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"$icon\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control\" id=\"$name\" name=\"$name\" placeholder=\"$placeholder\"  value=\"$value\" $requ />
                        </div>
                    </div>";
        }
        
        function inputGroupTextFixed($name,$title,$placeholder,$icon,$value,$requ,$fixText){
            return "<div class=\"form-group\">
                        <label for=\"$name\">$title</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"$icon\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control\" id=\"$name\" name=\"$name\" placeholder=\"$placeholder\"  value=\"$value\" $requ />
                            <div class=\"input-group-addon\">
                                $fixText
                            </div>
                        </div>
                    </div>";
        }
        
        /**
         * ALTForm::inputText()
         * 
         * @param mixed $name
         * @param mixed $title
         * @param mixed $placeholder
         * @param mixed $value
         * @return
         */
        function inputText($name,$title,$placeholder,$value){
            return "<div class=\"form-group\">
                        <label>$title</label>
                        <input type=\"text\" class=\"form-control\" name=\"$name\" placeholder=\"$placeholder\" value=\"$value\" />
                    </div>";
        }
        
        /**
         * ALTForm::inputDate()
         * 
         * @param mixed $name
         * @param mixed $title
         * @param mixed $placeholder
         * @param mixed $value
         * @return
         */
        function inputDate($name,$title,$placeholder,$value,$requ){            
            return "<div class=\"form-group\">
                            <label for=\"$name\">$title</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input class=\"form-control\" id=\"datepicker\" name=\"$name\" value=\"$value\" data-date-format=\"yyyy-mm-dd\" placeholder=\"$placeholder\" $requ >
                            </div>
                        </div>";
        }
        
        function inputDate2($name,$title,$placeholder,$value,$requ){            
            return "<div class=\"form-group\">
                            <label for=\"$name\">$title</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input class=\"form-control\" id=\"datepicker2\" name=\"$name\" value=\"$value\" data-date-format=\"yyyy-mm-dd\" placeholder=\"$title\" $requ >
                            </div>
                        </div>";
        }
        
        function selectChosen($name,$title,$array){
            $tmp = "";
            $tmp .= "<div class=\"form-group\">";
            $tmp .= "    <label for=\"$name\">$title</label>";
            $tmp .= "    <select class=\"form-control chosen-select\" name=\"$name\">";
            foreach($array as $value => $title){
                $tmp .= "<option value=\"".$value."\">".$title."</option>";
            }
            $tmp .= "    </select>";
            $tmp .= "</div>";
            return $tmp;
        }
        
        function selectChosenDBdecrypt($name,$title,$array){
            $tmp = "";
            $tmp .= "<div class=\"form-group\">";
            $tmp .= "    <label for=\"$name\">$title</label>";
            $tmp .= "    <select class=\"form-control chosen-select\" name=\"$name\">";
            foreach($array as $id => $data){
                 //[pat_id] => 140 [0] => 140 [pat_name] => Abel [1] => Abel
                foreach($data as $a => $b){
                    $tmp .= "<option value=\"".$id."\">".base64_decode($b)."</option>";
                }
            }
            $tmp .= "    </select>";
            $tmp .= "</div>";
            return $tmp;
        }
        
        function selectChosenDB($name,$title,$array){
            $tmp = "";
            $tmp .= "<div class=\"form-group\">";
            $tmp .= "    <label for=\"$name\">$title</label>";
            $tmp .= "    <select class=\"form-control chosen-select\" name=\"$name\">";
            foreach($array as $data){
                $val = array();
                foreach($data as $data2){
                    array_push($val,$data2);
                }
                $tmp .= "<option value=\"".$val[0]."\">".$val[1]."</option>";
            }
            $tmp .= "    </select>";
            $tmp .= "</div>";
            return $tmp;
        }
        
        function selectChosenDBSuffix($name,$title,$array,$suffix){
            $tmp = "";
            $tmp .= "<div class=\"form-group\">";
            $tmp .= "    <label for=\"$name\">$title</label>";
            $tmp .= "    <select class=\"form-control chosen-select\" name=\"$name\">";
            foreach($array as $data){
                $val = array();
                foreach($data as $data2){
                    array_push($val,$data2);
                }
                $tmp .= "<option value=\"".$val[0]."\">".$suffix.$val[0]." - ".$val[1]."</option>";
            }
            $tmp .= "    </select>";
            $tmp .= "</div>";
            return $tmp;
        }
        /**
         * ALTForm::textareaCK()
         * 
         * @param mixed $name
         * @param mixed $title
         * @param mixed $placeholder
         * @param mixed $value
         * @return
         */
        function textareaCK($name,$title,$placeholder,$value){
            return "<div class=\"form-group\">
                        <label>$title</label>
                        <textarea class=\"form-control ckeditor\" name=\"$name\" placeholder=\"$placeholder\">$value</textarea>
                    </div>";
        }
        
        /**
         * ALTForm::textArea()
         * 
         * @param mixed $name
         * @param mixed $title
         * @param mixed $placeholder
         * @param mixed $value
         * @return
         */
        function textArea($name,$title,$placeholder,$value){
            return "<div class=\"form-group\">
                        <label>$title</label>
                        <textarea class=\"form-control\" name=\"$name\" placeholder=\"$placeholder\">$value</textarea>
                    </div>";
        }
        
    }
?>
