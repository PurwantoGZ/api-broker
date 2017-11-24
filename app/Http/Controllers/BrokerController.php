<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrokerController extends Controller
{

	function __construct()
	{
		
	}

    public function getQuetes($ticker)
    {
        $infoUrl='https://finance.google.com/finance?q=idx:'.$ticker.'&output=json';
        $contents = str_replace('//','',file_get_contents($infoUrl));
    	Storage::disk('local')->put($ticker.'.json', $contents);

        if(Storage::disk('local')->exists($ticker.'.json')){
            $json = json_decode(Storage::disk('local')->get($ticker.'.json'), true);
            $data=$json[0];
            $related=$data['related'];

            echo $data['symbol']. '<br />';
            echo $data['exchange']. '<br />';
            echo $data['id']. '<br />';
            echo $data['t']. '<br />';
            echo $data['e']. '<br />';
            echo $data['name']. '<br />';
            echo $data['f_reuters_url']. '<br />';
            echo $data['f_recent_quarter_date']. '<br />';
            echo $data['f_annual_date']. '<br />';
            echo $data['f_ttm_date']. '<br />';
            echo $data['l']. '<br />';
            echo $data['shares']. '<br />';
            echo $related[0]['id']. '<br />';

            foreach ($related as $a => $b) {
                foreach ($b as $key => $value) {
                    echo $key.' : '.$value. '<br />';
                }
            }

        }
    }
    public function getQuetesv2($ticker)
    {
        $infoUrl='https://finance.google.com/finance?q=idx:'.$ticker.'&output=json';

        $contents = str_replace('//','',file_get_contents($infoUrl));

        $json = json_decode($contents, true);
        
        if(!array_key_exists("results_type",$json)){
            $data=$json[0];
            $related=$data['related'];
            return response()->json($related,200);

            // echo $data['symbol']. '<br />';
            // echo $data['exchange']. '<br />';
            // echo $data['id']. '<br />';
            // echo $data['t']. '<br />';
            // echo $data['e']. '<br />';
            // echo $data['name']. '<br />';
            // echo $data['f_reuters_url']. '<br />';
            // echo $data['f_recent_quarter_date']. '<br />';
            // echo $data['f_annual_date']. '<br />';
            // echo $data['f_ttm_date']. '<br />';
            // echo $data['l']. '<br />';
            // echo $data['shares']. '<br />';
            // echo $related[0]['id']. '<br />';

            // foreach ($related as $a => $b) {
            //     foreach ($b as $key => $value) {
            //         echo $key.' : '.$value. '<br />';
            //     }
            // }
        } 
    }
}
