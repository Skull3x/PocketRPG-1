<?php

namespace PocketRPG;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\event\Listener;

use PocketRPG\Quests\commands\endquest;
use PocketRPG\Quests\commands\listquest;
use PocketRPG\Quests\commands\startquest;
use PocketRPG\Quests\commands\seequest;

use PocketRPG\RPG\commands\rpgstart;
use PocketRPG\RPG\resources\assassindagger;
use PocketRPG\RPG\resources\warriorsword;
use PocketRPG\RPG\resources\magewand;
use PocketRPG\RPG\resources\tankershield;

use PocketRPG\classchat\classchat;
use PocketRPG\destroyandplace\preventing;

use PocketRPG\partysystem\commands\partyinvite;
use PocketRPG\partysystem\commands\partycreate;
use PocketRPG\partysystem\commands\partyleave;
use PocketRPG\partysystem\resources\damagestop;
use PocketRPG\partysystem\resources\partyleaveonquit;


class main extends PluginBase {
  
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
    
  public function getPlayer(){
    return $this->player;
  }
}
