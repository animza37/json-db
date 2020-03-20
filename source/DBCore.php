<?php
class JSONDBCore {

    public $target;
    public $array;
    public $data;

    public function db($file) {
        $this->target = __DIR__ . "../db/" . $file;
    }

    public function get_db($tab) {
        $fopen = fopen($this->target);
        $s = json_decode(fread($fopen, filesize($this->target)),true);
        fclose($fopen);
        $exist = false;
        foreach($s as $i => $val) {
            if($val == $tab) {
              $exist = true;
              $return = $val;
              break;
            }
        }
        if($exist == false) {
            return false;
        } else {
            return $val;
        }
    }
    
    private function save_db($file,$json) {
    
        //
    
        if(file_exists($this->target)) {
            // do something 
        } else {
            // create file
        }
    }

}
