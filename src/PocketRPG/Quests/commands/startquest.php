<?php

namespace PocketRPG\Quests\commands;

use pocketmine\utils\TextFormat as TF;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class startquest extends PluginBase {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch($cmd->getName()) {
      case "startquest":
        if($args[0] == "1") {
            if($p->hasPermission("quest.1.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > -1) {
              $p->sendMessage(TF::GRAY . "Quest started: Helping the Farmer");
              $p->sendMessage(TF::AQUA . "Collect 5 pieces of wheat.");
              $p->setPermission("quest.1.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          
        } elseif($args[0] == "2") {
            if($p->hasPermission("quest.2.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 0) {
              $p->sendMessage(TF::GRAY . "Quest started: Not enough Trees");
              $p->sendMessage(TF::AQUA . "Collect 16 Oak Saplings");
              $p->setPermission("quest.2.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "3") {
            if($p->hasPermission("quest.3.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 1) {
              $p->sendMessage(TF::GRAY . "Quest started: Searching the Stick");
              $p->sendMessage(TF::AQUA . "Collect 1 stick");
              $p->setPermission("quest.3.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "4") {
            if($p->hasPermission("quest.4.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 2) {
              $p->sendMessage(TF::GRAY . "Quest started: Shearing the Sheap");
              $p->sendMessage(TF::AQUA . "Collect 1 shears");
              $p->setPermission("quest.4.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "5") {
            if($p->hasPermission("quest.5.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 3) {
              $p->sendMessage(TF::GRAY . "Quest started: The lost Gem");
              $p->sendMessage(TF::AQUA . "Collect 1 Emerald");
              $p->setPermission("quest.5.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "6") {
            if($p->hasPermission("quest.6.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 4) {
              $p->sendMessage(TF::GRAY . "Quest started: Freezingly Cold");
              $p->sendMessage(TF::AQUA . "Collect 32 ice blocks");
              $p->setPermission("quest.6.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "7") {
            if($p->hasPermission("quest.7.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 5) {
              $p->sendMessage(TF::GRAY . "Quest started: Gravedigger");
              $p->sendMessage(TF::AQUA . "Collect 5 bones and 5 rotten flesh");
              $p->setPermission("quest.7.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "8") {
            if($p->hasPermission("quest.8.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 6) {
              $p->sendMessage(TF::GRAY . "Quest started: Fish Galore");
              $p->sendMessage(TF::AQUA . "Collect 16 fishes");
              $p->setPermission("quest.8.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "9") {
            if($p->hasPermission("quest.9.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 7) {
              $p->sendMessage(TF::GRAY . "Quest started: Burning Souls");
              $p->sendMessage(TF::AQUA . "Collect 5 blaze powder and 5 blaze rods");
              $p->setPermission("quest.9.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
            
        } elseif($args[0] == "10") {
            if($p->hasPermission("quest.10.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 8) {
              $p->sendMessage(TF::GRAY . "Quest started: The Experiment");
              $p->sendMessage(TF::AQUA . "Collect 10 glowstone dust and 10 redstone");
              $p->setPermission("quest.10.cancomplete");
            } else {
              $p->sendMessage(TF:: RED . "You are not the right level to start this quest.");
            }
          
        } elseif(!isset($args[0])) {
            $p->sendMessage(TF:: RED . "Please specify the number of a quest.");
        }
    }
  return $cmd;
  }
}


