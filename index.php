<?php


    class token{
        var $token;

        function token() {
            $this->token = "724e74b30d9841948ca39ad78b50c9583521928818c04a3e8011ae9d87aa37ba";
        }

        function get_opts() {
            $opts = [
                "http" => [
                    "header" => "auth:" . $this->token
                ]
            ];
            return $opts;
        }

        function decode($tag) {
            $context = $this->get_content($this->get_opts());
            $url = "http://api.cr-api.com/clan/".$tag;
            $test = file_get_contents($url,true, $context);
            //print_r($test);
            //var_dump($test);
            $decoded = json_decode($test, true);
            return $decoded;
        }

        function get_content($opts) {
            $context = stream_context_create($opts);
            return $context;
        }
        
        function get_clan_title($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                print_r($member);
            }            
        }

        function get_members_id($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                print_r($member);
            }            
        }

        function get_members_name($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                print_r($member);
            }            
        }

        function get_members_rank($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                print_r($member);
            }            
        }

        function get_members_trophies($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                echo $member['trophies'].'<br>';
            }            
        }

        function get_members_full($tag) {
            $decoded = $this->decode($tag);
            foreach($decoded['members'] as $member){
                echo '<tr><a href="player.php?tag='.$member['tag'].'"><td>'.$member['rank'].'</td>'.
                '<td>'.$member['name'].'</td>'.
                '<td>'.$member['trophies'].'</td>'.
                '<td>'.strtoupper($member['role']).'</td></a></tr>';
            } 
        }

        function get_clan_name($tag) {
            $decoded = $this->decode($tag);
            return $decoded['name'];          
        }

        function get_clan_description($tag) {
            $decoded = $this->decode($tag);
            return $decoded['description']; 
        }

        function get_top_players() {
            
        }

        function decode_player($tag) {
            $context = $this->get_content($this->get_opts());
            $url = "http://api.cr-api.com/player/".$tag;
            $test = file_get_contents($url,true, $context);
            $decoded = json_decode($test, true);
            return $decoded;
        }

        function get_player_details($tag) {
            $decoded = $this->decode_player($tag);
            echo $decoded['tag'];
            /* foreach($decoded['members'] as $member){
                echo '<tr><td>'.$member['rank'].'</td>'.
                '<td>'.$member['name'].'</td>'.
                '<td>'.$member['trophies'].'</td>'.
                '<td>'.strtoupper($member['role']).'</td></tr>';
            } */ 
        }

        function get_player_name($tag) {
            $decoded = $this->decode_player($tag);
            echo $decoded['name'];
        }

        function get_player_trophies($tag) {
            $decoded = $this->decode_player($tag);
            echo $decoded['trophies'];
        }

        function get_player_clan($tag) {
            $decoded = $this->decode_player($tag);
            echo $decoded['clan']['name'];
        }

        function get_player_arena($tag) {
            $decoded = $this->decode_player($tag);
            echo $decoded['arena']['name'];
        }
    }

    class player {
        var $players;

        function __construct($args) {
            $this->players = $args;
        }

    }
?>
