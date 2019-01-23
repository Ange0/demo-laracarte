<?php
    namespace App\utilities;
    use DateTime; // important car il me permet de d'utiliser la classe DateTime global ou faire \DateTime sans le use
    class  Date
    {
        public static function isWeekEnd(){
            return  (new DateTime)->format('N') >=6;// equivaut a faire simplement date('N') pour avoir le numero du jour
        }
    }

?>
