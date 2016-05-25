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
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_1") . " pieces of " . $this->config->get("Item_for_finish_1") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 0");
            } elseif($p->hasPermission("quest.1.cancomplete") && $p->getExpLevel() > -1) {
              $p->sendMessage(TF:: YELLOW . "Quest 1 - " . $this->config->get("Quest_name_1") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_1") . " pieces of " . $this->config->get("Item_for_finish_2") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 0");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "2":
            if($p->hasPermission("quest.2.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 2 - " . $this->config->get("Quest_name_2") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_2") . " pieces of " . $this->config->get("Item_for_finish_2") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 1");
            } elseif($p->hasPermission("quest.2.cancomplete") && $p->getExpLevel() > 0) {
              $p->sendMessage(TF:: YELLOW . "Quest 2 - " . $this->config->get("Quest_name_2") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_2") . " pieces of " . $this->config->get("Item_for_finish_2") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 1");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "3":
            if($p->hasPermission("quest.3.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 3 - " . $this->config->get("Quest_name_3") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_3") . " pieces of " . $this->config->get("Item_for_finish_3") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 2");
            } elseif($p->hasPermission("quest.3.cancomplete") && $p->getExpLevel() > 1) {
              $p->sendMessage(TF:: YELLOW . "Quest 3 - " . $this->config->get("Quest_name_3") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_3") . " pieces of " . $this->config->get("Item_for_finish_3") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 2");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
            
          case "4":
            if($p->hasPermission("quest.4.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 4 - " . $this->config->get("Quest_name_4") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_4") . " pieces of " . $this->config->get("Item_for_finish_4") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 3");
            } elseif($p->hasPermission("quest.4.cancomplete") && $p->getExpLevel() > 2) {
              $p->sendMessage(TF:: YELLOW . "Quest 4 - " . $this->config->get("Quest_name_4") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_4") . " pieces of " . $this->config->get("Item_for_finish_4") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 3");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
            
          case "5":
            if($p->hasPermission("quest.5.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 5 - " . $this->config->get("Quest_name_5") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_5") . " pieces of " . $this->config->get("Item_for_finish_5") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 4");
            } elseif($p->hasPermission("quest.5.cancomplete") && $p->getExpLevel() > 3) {
              $p->sendMessage(TF:: YELLOW . "Quest 5 - " . $this->config->get("Quest_name_5") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_5") . " pieces of " . $this->config->get("Item_for_finish_5") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 4");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "6":
            if($p->hasPermission("quest.6.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 6 - " . $this->config->get("Quest_name_6") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_6") . " pieces of " . $this->config->get("Item_for_finish_6") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 5");
            } elseif($p->hasPermission("quest.6.cancomplete") && $p->getExpLevel() > 4) {
              $p->sendMessage(TF:: YELLOW . "Quest 6 - " . $this->config->get("Quest_name_6") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_6") . " pieces of " . $this->config->get("Item_for_finish_6") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 5");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "7":
            if($p->hasPermission("quest.7.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 7 - " . $this->config->get("Quest_name_7") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_7") . " pieces of " . $this->config->get("Item_for_finish_7") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 6");
            } elseif($p->hasPermission("quest.7.cancomplete") && $p->getExpLevel() > 5) {
              $p->sendMessage(TF:: YELLOW . "Quest 7 - " . $this->config->get("Quest_name_7") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_7") . " pieces of " . $this->config->get("Item_for_finish_7") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 6");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "8":
            if($p->hasPermission("quest.8.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 8 - " . $this->config->get("Quest_name_8") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_8") . " pieces of " . $this->config->get("Item_for_finish_7") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 7");
            } elseif($p->hasPermission("quest.8.cancomplete") && $p->getExpLevel() > 6) {
              $p->sendMessage(TF:: YELLOW . "Quest 8 - " . $this->config->get("Quest_name_8") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_8") . " pieces of " . $this->config->get("Item_for_finish_7") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 7");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "9":
            if($p->hasPermission("quest.9.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 9 - " . $this->config->get("Quest_name_9") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_9") . " pieces of " . $this->config->get("Item_for_finish_9") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 8");
            } elseif($p->hasPermission("quest.7.cancomplete") && $p->getExpLevel() > 7) {
              $p->sendMessage(TF:: YELLOW . "Quest 9 - " . $this->config->get("Quest_name_9") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_9") . " pieces of " . $this->config->get("Item_for_finish_9") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 8");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          
          case "10":
            if($p->hasPermission("quest.10.completed")) {
              $p->sendMessage(TF:: GREEN . "Quest 10 - " . $this->config->get("Quest_name_10") . " - Completed!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_10") . " pieces of " . $this->config->get("Item_for_finish_10") . "");
              $p->sendMessage(TF:: GREEN . "lvl. 9");
            } elseif($p->hasPermission("quest.10.cancomplete") && $p->getExpLevel() > 8) {
              $p->sendMessage(TF:: YELLOW . "Quest 10 - " . $this->config->get("Quest_name_10") . " - Uncompleted!");
              $p->sendMessage(TF:: AQUA . "Collect " . $this->config->get("Amount_for_finish_10") . " pieces of " . $this->config->get("Item_for_finish_10") . "");
              $p->sendMessage(TF:: YELLOW . "lvl. 9");
            } else {
              $p->sendMessage(TF:: RED . "You have not started this quest.");
            }
          break;
          return true;
        }
      break;
    return true;
    }
  }
}
?>
