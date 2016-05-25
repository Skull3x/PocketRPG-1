<?php

namespace PocketRPG\Quests\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class seequest extends PluginBase {
  
  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "seequest":
        switch($args[0]) {
          case "1":
            if($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 1 - " . $this->config->get("Quest_name_1") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish") . " pieces of wheat.");
              $p->sendMessage(TF:: GREEN . "lvl. 0");
            } elseif($p->hasPermission("quest.1.cancomplete") && $p->getExpLevel() > -1) {
              $p->sendMessage(TF:: YELLOW . "Quest 1 - Helping the Farmer - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect 5 pieces of wheat.");
              $p->sendMessage(TF:: YELLOW . "lvl. 0");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
        }
    }
  }
}
