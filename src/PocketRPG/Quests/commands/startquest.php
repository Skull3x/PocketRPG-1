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
        switch($args[0]) {
          case "1":
            if($p->hasPermission("quest.1.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > -1) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_1") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_1") . " pieces of "$this->config->get("Item_for_finish_1") . "");
              $p->setPermission("quest.1.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "2":
            if($p->hasPermission("quest.2.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 0) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_2") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_2") . " pieces of "$this->config->get("Item_for_finish_2") . "");
              $p->setPermission("quest.2.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "3":
            if($p->hasPermission("quest.3.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 1) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_3") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_3") . " pieces of "$this->config->get("Item_for_finish_3") . "");
              $p->setPermission("quest.3.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "4":
            if($p->hasPermission("quest.4.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 2) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_4") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_4") . " pieces of "$this->config->get("Item_for_finish_4") . "");
              $p->setPermission("quest.4.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "5":
            if($p->hasPermission("quest.5.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 3) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_5") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_5") . " pieces of "$this->config->get("Item_for_finish_5") . "");
              $p->setPermission("quest.5.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "6":
            if($p->hasPermission("quest.6.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 4) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_6") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_6") . " pieces of "$this->config->get("Item_for_finish_6") . "");
              $p->setPermission("quest.6.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "7":
            if($p->hasPermission("quest.7.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 5) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_7") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_7") . " pieces of "$this->config->get("Item_for_finish_7") . "");
              $p->setPermission("quest.7.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "8":
            if($p->hasPermission("quest.8.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 6) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_8") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_8") . " pieces of "$this->config->get("Item_for_finish_8") . "");
              $p->setPermission("quest.8.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "9":
            if($p->hasPermission("quest.9.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 7) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_9") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_9") . " pieces of "$this->config->get("Item_for_finish_9") . "");
              $p->setPermission("quest.9.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
          
          case "10":
            if($p->hasPermission("quest.10.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 8) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_10") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_10") . " pieces of "$this->config->get("Item_for_finish_10") . "");
              $p->setPermission("quest.10.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
          break;
        }
    }
  }
}


