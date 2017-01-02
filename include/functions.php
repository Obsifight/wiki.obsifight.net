<?php

function debug($v) {
  echo '<pre style="background-color:#cacaca;border-radius: 3;padding:5px;"><code>';
  var_dump($v);
  $debug = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
  echo '</code><em>Ligne '.$debug[0]['line'].', fichier : '.$debug[0]['file'].'</em></pre>';
}

function timeToTimeAgo($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'année',
                 30 * 24 * 60 * 60  =>  'mois',
                      24 * 60 * 60  =>  'jour',
                           60 * 60  =>  'heure',
                                60  =>  'minute',
                                 1  =>  'seconde'
                );
    $a_plural = array( 'année'   => 'années',
                       'mois'  => 'mois',
                       'jour'    => 'jours',
                       'heure'   => 'heures',
                       'minute' => 'minutes',
                       'seconde' => 'secondes'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str);
        }
    }
}
