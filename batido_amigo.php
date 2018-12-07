<?php

/*                  *
 *   Batido Amigo   *
 *                  */

$players_giayetto = array(
            'vejete'=>array(
                    'Name'=>'Oscar (Vejete)',
                    'Restricted'=>array('vejete','san','diego','hilda'),/* uno mismo, ultima vez, vez anterior */
                    'File'=>'Oscar'
                ),
            'mamola'=>array(
                    'Name'=>'Silvia (Mamola)',
                    'Restricted'=>array('mamola','hilda','piluqui','vejete'),
                    'File'=>'Silvia'
                ),
            'san'=>array(
                    'Name'=>'Santiago',
                    'Restricted'=>array('san','anola','her','tincho'),
                    'File'=>'Santiago'
                ),
            'stefi'=>array(
                    'Name'=>'Stefani (Stefi)',
                    'Restricted'=>array('stefi','esteban','leonard','mamola'),
                    'File'=>'Stefani'
                ),
            'her'=>array(
                    'Name'=>'Hernan',
                    'Restricted'=>array('her','vejete','tati','maraia'),
                    'File'=>'Hernan'
                ),
            'tati'=>array(
                    'Name'=>'Maria Jose (Tati)',
                    'Restricted'=>array('tati','tincho','esteban','stefi'),
                    'File'=>'Tati'
                ),
            'maraia'=>array(
                    'Name'=>'Maria Elisa',
                    'Restricted'=>array('maraia','stefi','elvira','diego'),
                    'File'=>'Maria'
                ),
            'tincho'=>array(
                    'Name'=>'Martin (Tincho)',
                    'Restricted'=>array('tincho','maraia','eeerch','leonard'),
                    'File'=>'Tincho'
                ),
            'anola'=>array(
                    'Name'=>'Ana Cecilia',
                    'Restricted'=>array('anola','piluqui','maraia','esteban'),
                    'File'=>'AnaCecilia'
                ),
            'diego'=>array(
                    'Name'=>'Diego',
                    'Restricted'=>array('diego','elvira','vejete','eeerch'),
                    'File'=>'Diego'
                ),
            'eeerch'=>array(
                    'Name'=>'Jorgelina',
                    'Restricted'=>array('eeerch','tati','mamola','piluqui'),
                    'File'=>'Jorgelina'
                ),
            'leonard'=>array(
                    'Name'=>'Leonardo',
                    'Restricted'=>array('leonard','her','stefi','san'),
                    'File'=>'Leonardo'
                ),
            'piluqui'=>array(
                    'Name'=>'Pilar',
                    'Restricted'=>array('piluqui','mamola','san','anola'),
                    'File'=>'Pilar'
                ),
            'agus'=>array(
                    'Name'=>'Agustin',
                    'Restricted'=>array('agus','eeerch'),
                    'File'=>'Agustin'
                ),
            //'marce'=>array(
                    //'Name'=>'Marcelo',
                    //'Restricted'=>array('marce','san'),
                    //'File'=>'Marcelo'
                //),
            'hilda'=>array(
                    'Name'=>'Hilda',
                    'Restricted'=>array('hilda','diego','tincho','tati'),
                    'File'=>'Hilda'
                ),
            'esteban'=>array(
                    'Name'=>'Esteban',
                    'Restricted'=>array('esteban','leonard','anola','elvira'),
                    'File'=>'Esteban'
                ),
            'elvira'=>array(
                    'Name'=>'Elvira',
                    'Restricted'=>array('elvira','agus','hilda','her'),
                    'File'=>'Elvira'
                )
        );

$players_frutos = array(
            'pepe'=>array(
                    'Name'=>'Pepe',
                    'Restricted'=>array('pepe','juan','chaco'),
                    'File'=>'Pepe'
                ),
            'nati'=>array(
                    'Name'=>'Nati',
                    'Restricted'=>array('nati','be','hernan'),
                    'File'=>'Nati'
                ),
            'mari'=>array(
                    'Name'=>'Mari',
                    'Restricted'=>array('mari','chaco','pepe'),
                    'File'=>'Mari'
                ),
            'chino'=>array(
                    'Name'=>'Chino',
                    'Restricted'=>array('chino','tati','be'),
                    'File'=>'Chino'
                ),
            'be'=>array(
                    'Name'=>'Belen',
                    'Restricted'=>array('be','mica','juan'),
                    'File'=>'Belen'
                ),
            'chaco'=>array(
                    'Name'=>'Chaco',
                    'Restricted'=>array('chaco','hernan','mari'),
                    'File'=>'Chaco'
                ),
            'tati'=>array(
                    'Name'=>'Tati',
                    'Restricted'=>array('tati','mari','chino'),
                    'File'=>'Tati'
                ),
            'hernan'=>array(
                    'Name'=>'Hernan',
                    'Restricted'=>array('hernan','pepe','tati'),
                    'File'=>'Hernan'
                ),
            'juan'=>array(
                    'Name'=>'Juan',
                    'Restricted'=>array('juan','nati','mica'),
                    'File'=>'Juan'
                ),
            'mica'=>array(
                    'Name'=>'Mica',
                    'Restricted'=>array('mica','chino','nati'),
                    'File'=>'Mica'
                ),
           'guille'=>array(
                   'Name'=>'Guille',
                   'Restricted'=>array('guille','chaco'),
                   'File'=>'Guille'
               )
        );

// taticete, lusampi, noegonza, pamelucio, natiloco, monchamoncho, dairabatata
$players_amigos = array(
            'taticete'=>array(
                    'Name'=>'Tati y Cete',
                    'Restricted'=>array('taticete'),
                    'File'=>'taticete'
                ),
            'lusampi'=>array(
                    'Name'=>'Lu y Sampi',
                    'Restricted'=>array('lusampi'),
                    'File'=>'lusampi'
                ),
            'noegonza'=>array(
                    'Name'=>'Noe y Gonza',
                    'Restricted'=>array('noegonza'),
                    'File'=>'noegonza'
                ),
            'pamelucio'=>array(
                    'Name'=>'Pame y Lucio',
                    'Restricted'=>array('pamelucio'),
                    'File'=>'pamelucio'
                ),
            'natiloco'=>array(
                    'Name'=>'Nati y Loco',
                    'Restricted'=>array('natiloco'),
                    'File'=>'natiloco'
                ),
            'monchamoncho'=>array(
                    'Name'=>'Moncha y Moncho',
                    'Restricted'=>array('monchamoncho'),
                    'File'=>'monchamoncho'
                ),
            'dairabatata'=>array(
                    'Name'=>'Daira y Batata',
                    'Restricted'=>array('dairabatata'),
                    'File'=>'dairabatata'
                )
        );


switch($argv[1]) {
    case 'frutos':
        $players = $players_frutos; break;
    case 'giayetto':
        $players = $players_giayetto; break;
    case 'grupo':
        $players = $players_amigos; break;
    default:
        echo "Argumento 1 (frutos,  giayetto o grupo) Incorrecto\n";
        exit();
}

switch($argv[2]) {
    case 'navidad':
    case 'reyes':
    case 'diadelamigo':
        $event = $argv[2]; break;
    default:
        echo "Argumento 2 (navidad, reyes o diadelamigo) Incorrecto\n";
        exit();
}

if (!empty($argv[3]) && is_numeric($argv[3]) && $argv[3] >= date('Y')) $year = $argv[3]; else { echo "Argumento 3 (ano) Incorrecto\n"; exit(); }

if (!empty($argv[4]) && ($argv[4] == 'notest' || $argv[4] == 'posta')) $is_test = false; else $is_test = true;

$names_ordered_a = array_keys($players);
$names_batidos_a = $names_ordered_a;
$max_attempts = 50;

if ($is_test) {
    echo "\n";
    echo " ----------- TEST ----------- \n";
    echo "\n";
}

for ($j=0; $j<$max_attempts; $j++) {
    echo "\nIntento: ".($j+1)."\n";
    shuffle($names_batidos_a);
    $succes = true;
    for ($i=0; $i<count($names_ordered_a); $i++) {
        if (in_array($names_batidos_a[$i], $players[$names_ordered_a[$i]]['Restricted'])) {
            echo " ... Mal sorteo: ".$players[$names_ordered_a[$i]]['Name']." no le puede regalar a ".$players[$names_batidos_a[$i]]['Name']."\n";
            $succes = false;
            break;
        }
        else {
            echo " ... ".$players[$names_ordered_a[$i]]['Name'].": OK\n";
        }
    }
    if ($succes) break;
    usleep(20000);
}

if ($succes) {
    echo "Exito!!!\n";
    $batido_dir = '/home/hgiayetto/batido_amigo/';
    $results_dir = $batido_dir.'batido_'.$argv[1].'_'.$event.'_'.$year.'/';
    //$results_dir = $batido_dir.'batido_'.$argv[1].'_'.$year.'/';

    if ($is_test) {
        echo "\n";
        echo " ----------- TEST ----------- \n";
        echo "\n";
        for ($i=0; $i<count($names_ordered_a); $i++) {
            echo str_pad($players[$names_ordered_a[$i]]['Name'], 20, ' ', STR_PAD_LEFT)." -----> ".$players[$names_batidos_a[$i]]['Name']."\n";
        }
    }
    else {
        $template = file_get_contents($batido_dir.'batido_texto_'.$argv[1].'_'.$year.'.txt'); // batido_texto_frutos_2011.txt
        if (!is_dir($results_dir)) exec('mkdir '.$results_dir);
        for ($i=0; $i<count($names_ordered_a); $i++) {
            // Llamar a la funcion que escriba los resultados en los archivos.
            $vars = array('[%PLAYER%]', '[%AMAIGO%]', "\n");
            $repl = array($players[$names_ordered_a[$i]]['Name'], $players[$names_batidos_a[$i]]['Name'], "\r\n");
            $text = str_replace($vars, $repl, $template);
            file_put_contents($results_dir.$players[$names_ordered_a[$i]]['File'].'.txt', $text);
            file_put_contents($results_dir.'Resultados.txt', str_pad($players[$names_ordered_a[$i]]['Name'], 20, ' ', STR_PAD_LEFT)." -----> ".$players[$names_batidos_a[$i]]['Name']."\n", FILE_APPEND);
        }
    }

}
else {
    echo "Se hicieron $max_attempts sin exito... Vuelva a intentarlo.\n";
}


?>