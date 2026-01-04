<?php
require_once 'LoadBalancer.php';
define('CONFIG_PATH', __DIR__ . '/../config/config.php');
dotenv_load(); // Load environment variables from .env file if needed
$config = include CONFIG_PATH;
balanceServers(); // Start the load balancer process
function balanceServers() {
    global $config;
inMemoryCacheSetup(); // Initialize cache setup 
global $lb; 
$lb = new LoadBalancer(); 
foreach ($config['load_balancer']['servers'] as $server) { 
$lb->addServer($server); 
} 
// Example of getting a server and caching result
$chosenServer = $lb->getServer(); 
$lb->cacheResult('last_server', $chosenServer); 
echo "Using server: " . $chosenServer; 
}
fuction inMemoryCacheSetup() {
vfghfhgfhgfhgfhgfhhgfhgfhgf ;// Placeholder for future caching logic\;} ?> 
