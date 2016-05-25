<?php

namespace PocketRPG/itemsremain;

use pocketmine\PluginBase;
use PocketRPG\main;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\CraftItemEvent;
use pocketmine\event\FurnaceBurnEvent;
use pocketmine\event\FurnaceSmeltEvent;
use pocketmine\event\PlayerDropItemEvent;
use pocketmine\Player;
use pocketmine\Server;

class itemsunlosable extends PluginBase implements Listener {
  
  public function onCraft(CraftItemEvent $event) {
    $rpglvl = $this->config->get("RPG_LEVEL")
    if($event->getPlayer()->getLevelByName() == "$rpglevel") {
      $event->setCancelled();
    }
  }
  
  public function onBurn(FurnaceBurnEvent $event2) {
    $rpglvl = $this->config->get("RPG_LEVEL")
    if($event2->getPlayer()->getLevelByName() == "$rpglvl") {
      $event2->setCancelled();
    }
  }
  
  public function onSmelt(FurnaceSmeltEvent $event3) {
    $rpglvl = $this->config->get("RPG_LEVEL")
    if($event3->getPlayer()->getLevelByName() == "$rpglevel") {
      $event3->setCancelled();
    }
  }
  
  public function onDrop(PlayerDropEvent $event4) {
    $rpglvl = $this->config->get("RPG_LEVEL")
    if($event4->getPlayer()->getLevelByName() == "$rpglevel") {
      $event4->setCancelled();
    }
  }
}
?>
