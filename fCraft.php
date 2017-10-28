<?php
	class fCraft {
		private $key;
		private $host = "https://api.fcraft.pl";

		public function __construct($key) {
	        $this->key = $key;
	    }

	    public function get($link) {
	    	return json_decode(file_get_contents($link), true);
	    }

	    public function deletedCuboid($server, $name) {
	        return $this->get("{$this->host}/{$server}/cuboid/deleted/{$name}?key0={$this->key}");
	    }

	    public function serverInformation($server) {
	        return $this->get("{$this->host}/{$server}/info?key0={$this->key}");
	    }

	    public function playerInformation($name) {
	        return $this->get("{$this->host}/player/{$name}?key0={$this->key}");
	    }

	    public function player($server, $uuid) {
	        return $this->get("{$this->host}/{$server}/player/{$uuid}?key0={$this->key}");
	    }

	    public function playerStatistics($server, $uuid, $key) {
	        return $this->get("{$this->host}/{$server}/player/{$uuid}/statistics?key0={$this->key}&key1={$key}");
	    }

	    public function playerTransactions($server, $uuid, $key) {
	        return $this->get("{$this->host}/{$server}/player/{$uuid}/transactions?key0={$this->key}&key1={$key}");
	    }

	    public function cuboidList($server, $world, $uuid, $key) {
	        return $this->get("{$this->host}/{$server}/cuboid/{$world}/list/{$uuid}?key0={$this->key}&key1={$key}");
	    }

	    public function cuboid($server, $world, $name) {
	        return $this->get("{$this->host}/{$server}/cuboid/{$world}/{$name}?key0={$this->key}");
	    }
	}