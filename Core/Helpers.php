<?php

namespace App\Core;

use App\Repository\OLPR\SeveriteRepository;
use App\Repository\OLPR\StatutRepository;

class Helpers {

	public static function cleanFirstname($firstname) {
		return ucwords(mb_strtolower(trim($firstname)));
	}

    //dump le parametre
    public static function debug(...$params) {
	    echo '<style>';
	    echo 'pre {
                white-space: pre-wrap;       /* Since CSS 2.1 */
                white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
                white-space: -pre-wrap;      /* Opera 4-6 */
                white-space: -o-pre-wrap;    /* Opera 7 */
                word-wrap: break-word;       /* Internet Explorer 5.5+ */
                font-size: 15px;
            }';
	    echo '</style>';
        echo '<pre style="background-color: #1e2125; color: #ffffff; padding: 20px">';
        foreach($params as $param) {
            print_r($param);
        }
        echo '</pre>';
        exit;
    }

    public static function dump($to_dump) {
        echo '<br><br><br><br><br>';
        var_dump($to_dump);
        echo '<br><br><br><br><br>';
    }

}

