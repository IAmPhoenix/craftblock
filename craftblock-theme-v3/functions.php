<?php

    // Define servers
    $server = [
        'craftblock' => 'craftblock.me',
        'nanoblock' =>  'craftblock.me:25585',
        'chocoblock' => 'craftblock.me:25564'
    ];

    function getAPI($type, $server){
        $url = 'http://api.iamphoenix.me/'.$type.'/?server_ip='.$server;
        $file = file_get_contents($url);
        $file = json_decode($file);
        if (property_exists($file, 'error')) {
            return false;
        }
        return $file;
    }

    /*
        Fetch Server Information for each server.
        APIs:
        http://api.iamphoenix.me/
     */

    function getStatus($server) {
        $status = getAPI('status', $server);
        if ($status != false) {
            if ($status->status == 'true') {
                return '<strong class="status-online"> Online :]</strong>';
            } elseif ($status->status == 'false') {
                return '<strong class="status-offline"> Offline :[</strong>';
            } else {
                return 'Not sure. Check the forums.';
            }
        }
    }

    function statusCheck($server) {
        $status = getAPI('status', $server);
        if ($status != false) {
            if ($status->status == 'true') {
                return true;
            } elseif ($status->status == 'false') {
                return false;
            } else {
                return false;
            }
        }
    }

    function getVersion($server) {
        if (statusCheck($server) != false) {
            $version = getAPI('version', $server);
            if ($version != false) {
                return '<span><strong>' . $version->version . '</strong></span>';
            } else {
                return false;
            }
        }
    }
   
    function getPlayerCount($server) {
        if (statusCheck($server) != false) {
            $playerCount = getAPI('players', $server);
            if ($playerCount != false) {
                $playersOnline = $playerCount->players;
                $playersMax = $playerCount->players_max;
                if ($playersOnline == 0) {
                    return '
                    <span>Players Online: <strong>' . $playersOnline . '/' . $playersMax . '</strong>
                    <span class="server-empty">Server Depleted. Come fill it up!</span></span>';
                }
                return '<span>Players Online: <strong>' . $playersOnline . '/' . $playersMax . '</strong></span>';
            }
        }
    }

    function getPlayers($server) {
        if (statusCheck($server) != false) {
            $playersList = getAPI('list', $server);
            if ($playersList != false && $playersList != "") {
                $players = explode(',', $playersList->players);
                if (is_array($players) && !empty($players)) {
                    foreach ($players as $player) {
                       echo '<img 
                       data-tooltip 
                       class="has-tip" 
                       title="'.$player.'" 
                       src="https://minotar.net/avatar/'.$player.'/32">';
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }


    

    