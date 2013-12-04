<?php

class MinecraftAPI 
{

    private function getAPI($type, $server){
        $url = 'http://api.iamphoenix.me/' . $type . '/?server_ip=' . $server;
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

    private function statusCheck($server) {
        $status = $this->getAPI('status', $server);
        if ($status != false) {
            if ($status->status == 'true') {
                return true;
            }
            return false;
        }
    }

    public function getStatus($server) {
        $status = $this->getAPI('status', $server);
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

    public function getVersion($server) {
        if ($this->statusCheck($server) != false) {
            $version = $this->getAPI('version', $server);
            if ($version != false) {
                return '<span><strong>' . $version->version . '</strong></span>';
            } else {
                return false;
            }
        }
    }
   
    public function getPlayerCount($server) {
        if ($this->statusCheck($server) != false) {
            $playerCount = $this->getAPI('players', $server);
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

    public function getPlayers($server) {
        if ($this->statusCheck($server) != false) {
            $playersList = $this->getAPI('list', $server);
            if ($playersList != false && $playersList != "") {
                $players = explode(',', $playersList->players);
                if (is_array($players) && !empty($players)) {
                    foreach ($players as $player) {
                    	if($player !== '')
                    		echo '<img data-tooltip class="has-tip" title="'.$player.'" src="https://minotar.net/avatar/'.$player.'/32">';
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}

// Initiate the class
$api = new MinecraftAPI();

// Define servers
$server = [
	'craftblock' => 'craftblock.me',
    'nanoblock' =>  'craftblock.me:25585',
    'chocoblock' => 'craftblock.me:25564'
];

// Loop through the array and ping each server.
foreach ($server as $sev) {
	echo '<p>' . $sev . '</p>' . $api->getStatus( $sev ) . '<br><br>';
}

?>
