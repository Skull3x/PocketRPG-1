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
              if($p->hasPermission("quest.1.cancomplete") && $p->getInventory()->getId($this->config->get("Item_for_finish_1"))->getCount() >= $this->config->get("Amount_finish_1")) {
              $p->getInventory()->removeItem($this->config->get("Item_for_finish_1"));
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
              if($p->hasPermission("quest.2.cancomplete") && $p->getInventory()->getId($this->config->get("Item_for_finish_2"))->getCount() >= $this->config->get("Amount_finish_2")) {
              $p->getInventory()->removeItem($this->config->get("Item_for_finish_2"));
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
              if($p->hasPermission("quest.3.cancomplete") && $p->getInventory()->getId($this->config->get("Item_for_finish_3"))->getCount() >= $this->config->get("Amount_finish_3")) {
              $p->getInventory()->removeItem($this->config->get("Item_for_finish_3"));
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
        }
    }
  }
}
