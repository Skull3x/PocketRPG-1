<?php

namespace PocketRPG\itemsremain;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\event\PlayerDeathEvent;
use pocketmine\utils\TextFormat;
use PocketRPG\main;

class KeepInventory extends PluginBase implements Listener {

  public function onDeath(PlayerDeathEvent $event) {
    $p = $event->getPlayer();
    $rpglvl = $this->config->get("RPG_LEVEL");
    if($p->getLevelByName() == $rpglvl) {
      $p->setKeepInventory();
    } else {
      $p->setKeepInventory(false);
    }
  }
}
?>
