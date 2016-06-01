<?php

namespace PocketRPG;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\Player;

class main extends PluginBase implements Listener {
  
  public function onLoad() {
    $this->getLogger()->info("PocketRPG loading!");
  }
  
  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Enabling PocketRPG!");
    @mkdir($this->getDataFolder());
    $this->saveResource("config.yml");
    $this->config = new Config($this->getDataFolder(). "config.yml", Config::YAML);
  }
  
  public function onDisable() {
    $this->getLogger()->info("Disabling PocketRPG!");
  }
}
?>
