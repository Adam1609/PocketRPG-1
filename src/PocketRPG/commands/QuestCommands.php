<?php

namespace PocketRPG\commands;

use PocketRPG\Main;
use Pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;
use pocketmine\permission\Permission;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\level\Level;

class QuestCommands extends PluginBase implements CommandExecutor{

  public function onCommand(CommandSender $p, Command $cmd, $label, array $args) {
    if(strtolower($cmd->getName() == "quest")) {
      if(!$p instanceof Player) {
        $p->sendMessage(TF:: RED . "You can only use this command in game!");
      } else {
        switch(strtolower($args[0])) {
          case "end":
            switch(strtolower($args[1])) {
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
            return true;
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
            } elseif($p->hasPermission("quest.2.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
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
            return true;
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
            return true;
            break;
            
          case "5":
              if($p->hasPermission("quest.5.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_5"))->getCount() >= $this->config->get("Amount_finish_5")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_5"));
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
            return true;
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
            return true;
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
            return true;
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
            return true;
            break;
            
          case "9":
              if($p->hasPermission("quest.9.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_9"))->getCount() >= $this->config->get("Amount_finish_9")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_9"));
              $p->setPermission("quest.9.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_9 = $this->config->get("Amount_reward_9");
              $gold_9 = Item::get(Item::$this->config->get("Reward_quest_9"), 0, $amount_9);
              $p->getInventory()->addItem($gold_9);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.9.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
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
            return true;
            break;
            
              case "11":
              if($p->hasPermission("quest.11.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_11"))->getCount() >= $this->config->get("Amount_finish_11")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_11"));
              $p->setPermission("quest.11.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_11 = $this->config->get("Amount_reward_11");
              $gold_11 = Item::get(Item::$this->config->get("Reward_quest_11"), 0, $amount_11);
              $p->getInventory()->addItem($gold_11);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.11.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "12":
              if($p->hasPermission("quest.12.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_12"))->getCount() >= $this->config->get("Amount_finish_12")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_12"));
              $p->setPermission("quest.12.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_12 = $this->config->get("Amount_reward_12");
              $gold_12 = Item::get(Item::$this->config->get("Reward_quest_12"), 0, $amount_12);
              $p->getInventory()->addItem($gold_12);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.12.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "13":
              if($p->hasPermission("quest.13.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_13"))->getCount() >= $this->config->get("Amount_finish_13")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_13"));
              $p->setPermission("quest.13.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_13 = $this->config->get("Amount_reward_13");
              $gold_13 = Item::get(Item::$this->config->get("Reward_quest_13"), 0, $amount_13);
              $p->getInventory()->addItem($gold_13);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.13.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "14":
              if($p->hasPermission("quest.14.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_14"))->getCount() >= $this->config->get("Amount_finish_14")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_14"));
              $p->setPermission("quest.14.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_14 = $this->config->get("Amount_reward_14");
              $gold_14 = Item::get(Item::$this->config->get("Reward_quest_14"), 0, $amount_14);
              $p->getInventory()->addItem($gold_14);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.14.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "15":
              if($p->hasPermission("quest.15.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_15"))->getCount() >= $this->config->get("Amount_finish_15")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_15"));
              $p->setPermission("quest.15.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_15 = $this->config->get("Amount_reward_15");
              $gold_15 = Item::get(Item::$this->config->get("Reward_quest_15"), 0, $amount_15);
              $p->getInventory()->addItem($gold_15);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.15.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "16":
              if($p->hasPermission("quest.16.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_16"))->getCount() >= $this->config->get("Amount_finish_16")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_16"));
              $p->setPermission("quest.16.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_16 = $this->config->get("Amount_reward_16");
              $gold_16 = Item::get(Item::$this->config->get("Reward_quest_16"), 0, $amount_16);
              $p->getInventory()->addItem($gold_16);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.16.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "17":
              if($p->hasPermission("quest.17.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_17"))->getCount() >= $this->config->get("Amount_finish_17")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_17"));
              $p->setPermission("quest.17.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_17 = $this->config->get("Amount_reward_17");
              $gold_17 = Item::get(Item::$this->config->get("Reward_quest_17"), 0, $amount_17);
              $p->getInventory()->addItem($gold_17);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.17.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "18":
              if($p->hasPermission("quest.18.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_18"))->getCount() >= $this->config->get("Amount_finish_18")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_18"));
              $p->setPermission("quest.18.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_18 = $this->config->get("Amount_reward_18");
              $gold_18 = Item::get(Item::$this->config->get("Reward_quest_18"), 0, $amount_18);
              $p->getInventory()->addItem($gold_18);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.18.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "19":
              if($p->hasPermission("quest.19.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_19"))->getCount() >= $this->config->get("Amount_finish_19")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_19"));
              $p->setPermission("quest.19.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_19 = $this->config->get("Amount_reward_19");
              $gold_19 = Item::get(Item::$this->config->get("Reward_quest_19"), 0, $amount_19);
              $p->getInventory()->addItem($gold_19);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.19.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
            
          case "20":
              if($p->hasPermission("quest.20.cancomplete") && $p->getInventory()->getId($this->config->get("ItemID_for_finish_20"))->getCount() >= $this->config->get("Amount_finish_20")) {
              $p->getInventory()->removeItem($this->config->get("ItemID_for_finish_20"));
              $p->setPermission("quest.20.completed");
              $p->addExpLevel(1);
              $p->sendMessage(TF:: GREEN . "Congratulations, you have completed the quest!");
              $p->sendMessage(TF:: GRAY . "Rewards obtained");
              $amount_20 = $this->config->get("Amount_reward_20");
              $gold_20 = Item::get(Item::$this->config->get("Reward_quest_20"), 0, $amount_20);
              $p->getInventory()->addItem($gold_20);
              $p->sendPopup(TF:: GREEN . "You leveled up!");
            } elseif($p->hasPermission("quest.20.completed")) {
              $p->sendMessage(TF:: RED . "You already finished this quest!");
            } else {
              $p->sendMessage(TF:: RED . "You can't finish this quest yet!");
            }
            return true;
            break;
          }
          break;
          
          case "start":
            switch(strtolower($args[1])) {
            case "1":
            if($p->hasPermission("quest.1.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > -1) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_1") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_1") . " pieces of " . $this->config->get("Item_for_finish_1") . "");
              $p->setPermission("quest.1.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "2":
            if($p->hasPermission("quest.2.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 0) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_2") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_2") . " pieces of " . $this->config->get("Item_for_finish_2") . "");
              $p->setPermission("quest.2.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "3":
            if($p->hasPermission("quest.3.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 1) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_3") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_3") . " pieces of " . $this->config->get("Item_for_finish_3") . "");
              $p->setPermission("quest.3.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "4":
            if($p->hasPermission("quest.4.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 2) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_4") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_4") . " pieces of " . $this->config->get("Item_for_finish_4") . "");
              $p->setPermission("quest.4.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
          case "5":
            if($p->hasPermission("quest.5.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 3) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_5") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_5") . " pieces of " . $this->config->get("Item_for_finish_5") . "");
              $p->setPermission("quest.5.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "6":
            if($p->hasPermission("quest.6.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 4) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_6") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_6") . " pieces of " . $this->config->get("Item_for_finish_6") . "");
              $p->setPermission("quest.6.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "7":
            if($p->hasPermission("quest.7.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 5) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_7") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_7") . " pieces of " . $this->config->get("Item_for_finish_7") . "");
              $p->setPermission("quest.7.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "8":
            if($p->hasPermission("quest.8.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 6) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_8") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_8") . " pieces of " . $this->config->get("Item_for_finish_8") . "");
              $p->setPermission("quest.8.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "9":
            if($p->hasPermission("quest.9.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 7) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_9") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_9") . " pieces of " . $this->config->get("Item_for_finish_9") . "");
              $p->setPermission("quest.9.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
          
            case "10":
            if($p->hasPermission("quest.10.cancomplete")) {
              $p->sendMessage(TF:: RED . "You already started this quest!");
            } elseif($p->getExpLevel() > 8) {
              $p->sendMessage(TF::AQUA . "Quest started: " . $this->config->get("Quest_name_10") . "");
              $p->sendMessage(TF::GRAY . "Collect " . $this->config->get("Amount_needed_10") . " pieces of " . $this->config->get("Item_for_finish_10") . "");
              $p->setPermission("quest.10.cancomplete");
            } else {
              $p->sendMessage(TF::RED . "You are not the right level to start this quest.");
            }
            return true;
            break;
            }
          break;
          
          case "list":
            switch(strtolower($args[1])) {
                  case "1":      
                    $p->sendMessage(TF:: AQUA . "Quest list 1");
                    if($p->hasPermission("quest.1.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_1") . " - level 0");
                    } elseif($p->hasPermission("quest.1.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_1") . " - level 0");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_1") . " - level 0");
                    }
                    
                    if($p->hasPermission("quest.2.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_2") . " - level 1");
                    } elseif($p->hasPermission("quest.2.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_2") . " - level 1");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_2") . " - level 1");
                    }
                    
                    if($p->hasPermission("quest.3.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_3") . " - level 2");
                    } elseif($p->hasPermission("quest.3.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_3") . " - level 2");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_3") . " - level 2");
                    }
                    
                    if($p->hasPermission("quest.4.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_4") . " - level 3");
                    } elseif($p->hasPermission("quest.4.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_4") . " - level 3");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_4") . " - level 3");
                    }
                    
                    if($p->hasPermission("quest.5.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_5") . " - level 4");
                    } elseif($p->hasPermission("quest.5.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_5") . " - level 4");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_5") . " - level 4");
                    }
                    return true;
                  break;
                                 
                  case "2":
                    $p->sendMessage(TF:: AQUA . "Quest list 2");
                    if($p->hasPermission("quest.6.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_6") . " - level 5");
                    } elseif($p->hasPermission("quest.6.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_6") . " - level 5");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_6") . " - level 5");
                    }
                    
                    if($p->hasPermission("quest.7.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_7") . " - level 6");
                    } elseif($p->hasPermission("quest.7.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_7") . " - level 6");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_7") . " - level 6");
                    }
                    
                    if($p->hasPermission("quest.8.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_8") . " - level 7");
                    } elseif($p->hasPermission("quest.8.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_8") . " - level 7");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_8") . " - level 7");
                    }
                    
                    if($p->hasPermission("quest.9.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_9") . " - level 8");
                    } elseif($p->hasPermission("quest.9.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_9") . " - level 8");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_9") . " - level 8");
                    }
                    
                    if($p->hasPermission("quest.10.completed")) {
                      $p->sendMessage(TF:: GREEN . "" . $this->config->get("Quest_name_10") . " - level 9");
                    } elseif($p->hasPermission("quest.10.cancomplete")) {
                      $p->sendMessage(TF:: YELLOW . "" . $this->config->get("Quest_name_10") . " - level 9");
                    } else {
                      $p->sendMessage(TF:: RED . "" . $this->config->get("Quest_name_10") . " - level 9");
                    }
                  return true;
                  break;
            }
        break;
        
        case "see":
          switch(strtolower($args[1])) {
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
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
            return true;
          break;
          }
        break;
        }
      }
    }
  }
}
