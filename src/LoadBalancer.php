<?php
class LoadBalancer {
    private $servers = [];
    private $cache = [];

    public function addServer($server) {
        $this->servers[] = $server;
    }

    public function getServer() {
        // Simple round-robin algorithm for load balancing
        if (empty($this->servers)) return null;
        return $this->servers[array_rand($this->servers)];
    }

    // Cache mechanism to store results for faster access
    public function cacheResult($key, $value) {
        $this->cache[$key] = $value;
    }

    public function getCachedResult($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
}
?>
