<?php

namespace PocketRPG\Quests\commands;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\Server;
use PocketRPG\main;

class endquest extends PluginBase {

  public function onCommand(Command $cmd, CommandSender $p, $label, array $args) {
    switch($cmd->getName()) {
      case "endquest":
        switch($args[0]) {
          case "1":
              if($p->hasPermission("quest.1.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_1"))->getCount() >= $this->config->get("Amount_finish_1")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_1"));
              $p->setPermission("quest.1.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_1 = $this->config->get("Amount_reward_1");
              $gold_1 = Item::get(Item::$this->config->get("Reward_quest_1"), 0, $amount_1);
              $p->getInventory()->addItem($gold_1);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;

          case "2":
              if($p->hasPermission("quest.2.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_2"))->getCount() >= $this->config->get("Amount_finish_2")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_2"));
              $p->setPermission("quest.2.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_2 = $this->config->get("Amount_reward_2");
              $gold_2 = Item::get(Item::$this->config->get("Reward_quest_2"), 0, $amount_2);
              $p->getInventory()->addItem($gold_2);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.1.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "3":
              if($p->hasPermission("quest.3.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_3"))->getCount() >= $this->config->get("Amount_finish_3")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_3"));
              $p->setPermission("quest.3.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_3 = $this->config->get("Amount_reward_3");
              $gold_3 = Item::get(Item::$this->config->get("Reward_quest_3"), 0, $amount_3);
              $p->getInventory()->addItem($gold_3);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.3.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "4":
              if($p->hasPermission("quest.4.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_4"))->getCount() >= $this->config->get("Amount_finish_4")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_4"));
              $p->setPermission("quest.4.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_4 = $this->config->get("Amount_reward_4");
              $gold_4 = Item::get(Item::$this->config->get("Reward_quest_3"), 0, $amount_4);
              $p->getInventory()->addItem($gold_4);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.4.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "5":
              if($p->hasPermission("quest.5.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_5"))->getCount() >= $this->config->get("Amount_finish_5")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_3"));
              $p->setPermission("quest.5.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_5 = $this->config->get("Amount_reward_5");
              $gold_5 = Item::get(Item::$this->config->get("Reward_quest_5"), 0, $amount_5);
              $p->getInventory()->addItem($gold_5);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.5.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "6":
              if($p->hasPermission("quest.6.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_6"))->getCount() >= $this->config->get("Amount_finish_6")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_6"));
              $p->setPermission("quest.6.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_6 = $this->config->get("Amount_reward_6");
              $gold_6 = Item::get(Item::$this->config->get("Reward_quest_6"), 0, $amount_6);
              $p->getInventory()->addItem($gold_6);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.6.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "7":
              if($p->hasPermission("quest.7.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_7"))->getCount() >= $this->config->get("Amount_finish_7")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_7"));
              $p->setPermission("quest.7.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_7 = $this->config->get("Amount_reward_7");
              $gold_7 = Item::get(Item::$this->config->get("Reward_quest_7"), 0, $amount_7);
              $p->getInventory()->addItem($gold_7);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.7.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "8":
              if($p->hasPermission("quest.8.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_8"))->getCount() >= $this->config->get("Amount_finish_8")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_8"));
              $p->setPermission("quest.8.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_8 = $this->config->get("Amount_reward_8");
              $gold_8 = Item::get(Item::$this->config->get("Reward_quest_8"), 0, $amount_8);
              $p->getInventory()->addItem($gold_8);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.8.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "9":
              if($p->hasPermission("quest.9.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_9"))->getCount() >= $this->config->get("Amount_finish_9")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_9"));
              $p->setPermission("quest.9.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_9 = $this->config->get("Amount_reward_3");
              $gold_9 = Item::get(Item::$this->config->get("Reward_quest_9"), 0, $amount_9);
              $p->getInventory()->addItem($gold_9);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.9.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
            
          case "10":
              if($p->hasPermission("quest.10.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_10"))->getCount() >= $this->config->get("Amount_finish_10")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_10"));
              $p->setPermission("quest.10.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_10 = $this->config->get("Amount_reward_10");
              $gold_10 = Item::get(Item::$this->config->get("Reward_quest_3"), 0, $amount_10);
              $p->getInventory()->addItem($gold_10);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.10.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            break;
        return true;
        }
    return true;
    }
  }
}

?>
