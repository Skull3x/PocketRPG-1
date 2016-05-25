<?php

namespace PocketRPG/Quests/commands;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\command;
use pocketmine\command\commandSender;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class listquest extends PluginBase implements Listener {
  
  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    switch($cmd->getName()) {
      case "quest":
        if(isset($args[0])) {
          switch($args[0]) {
            case "list":
              if(is_numeric($args[1])) {
                switch($args[1]) {
                  case "1":       //Quest list one (5 quests)
                    $p->sendMessage(TF:: BOLD . AQUA . "Quest list 1");
                    if($p->hasPermission("quest.1.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_1")" - level 0");
                    } elseif($p->hasPermission("quest.1.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_1")" - level 0");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_1")" - level 0");
                    }
                    
                    if($p->hasPermission("quest.2.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_2")" - level 1");
                    } elseif($p->hasPermission("quest.2.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_2")" - level 1");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_2")" - level 1");
                    }
                    
                    if($p->hasPermission("quest.3.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_3")" - level 2");
                    } elseif($p->hasPermission("quest.3.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_3")" - level 2");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_3")" - level 2");
                    }
                    
                    if($p->hasPermission("quest.4.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_4")" - level 3");
                    } elseif($p->hasPermission("quest.4.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_4")" - level 3");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_4")" - level 3");
                    }
                    
                    if($p->hasPermission("quest.5.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_5")" - level 4");
                    } elseif($p->hasPermission("quest.5.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_5")" - level 4");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_5")" - level 4");
                    }
                  break;
                                    //Quest list 2
                  case "2":
                    $p->sendMessage(TF:: BOLD . AQUA . "Quest list 2");
                    if($p->hasPermission("quest.6.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_6")" - level 5");
                    } elseif($p->hasPermission("quest.6.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_6")" - level 5");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_6")" - level 5");
                    }
                    
                    if($p->hasPermission("quest.7.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_7")" - level 6");
                    } elseif($p->hasPermission("quest.7.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_7")" - level 6");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_7")" - level 6");
                    }
                    
                    if($p->hasPermission("quest.8.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_8")" - level 7");
                    } elseif($p->hasPermission("quest.8.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_8")" - level 7");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_8")" - level 7");
                    }
                    
                    if($p->hasPermission("quest.9.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_9")" - level 8");
                    } elseif($p->hasPermission("quest.9.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_9")" - level 8");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_9")" - level 8");
                    }
                    
                    if($p->hasPermission("quest.10.completed")) {
                      $p->sendMessage(TF:: GREEN . ""$this->config->get("Quest_name_10")" - level 9");
                    } elseif($p->hasPermission("quest.10.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . ""$this->config->get("Quest_name_10")" - level 9");
                    } else {
                      $p->sendMessage(TF:: RED . ""$this->config->get("Quest_name_10")" - level 9");
                    }
                  break;
                }
              } else {
                $p->sendMessage(TF:: RED . "Please specify a list number");
              }
          return true;
          break;
          }
        }
    return true;
    break;
    }
  }
}

?>
