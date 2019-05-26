<?php
    namespace ECC;
    use Carbon\Carbon;
          
    class CarbonController
    {
    
        public function index()
        {
            $UnDiaMas= Carbon::now()->locale("es_ES")->add(1,"day")->isoformat('dddd D');
            $output="Mañana será $UnDiaMas";
            return $output;
        }
    }