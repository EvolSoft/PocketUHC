<?php
/*
 * PocketUHC (v1.0) by EvolSoft
 * Developer: EvolSoft (TheDiamondYT)
 * Website: http://www.evolsoft.tk
 * Date: 14/05/2016 12:48 PM (UTC)
 * Copyright & License: (C) 2016 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/PocketUHC/blob/master/LICENSE)
 */
namespace PocketUHC;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\item\Item;
class EventListener extends PluginBase implements Listener{

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }
    
    public function onJoin(PlayerJoinEvent $event){
        $cfg = $this->plugin->cfg;
        
        if($cfg["Join"]["custom-join-message"]){
            if($cfg["Join"]["message"] == "-"){
                $event->setJoinMessage(NULL);
                return true;
            }      
            $event->setJoinMessage($cfg["Join"]["message"]);
            return true;
        }
    }
    
    public function onQuit(PlayerQuitEvent $event){
        $cfg = $this->plugin->cfg;
       
        if($cfg["Quit"]["custom-quit-message"]){
            if($cfg["Quit"]["message"] == "-"){
                $event->setQuitMessage(NULL);
                return true;
            }
            $event->setJoinMessage($cfg["Quit"]["message"]);
            return true;
        }
    }
    
    public function onDeath(PlayerDeathEvent $event){
        $cfg = $this->plugin->cfg;
        $entity = $event->getEntity();
        $level = $entity->getLevel();
        
        if($cfg["Death"]["custom-death-message"]){
            if($cfg["Death"]["message"] == "-"){
                return true; //Don't modify it.
            }
            $event->setDeathMessage($cfg["Death"]["message"]);
            return true;
        }
        
        if($entity instanceof \pocketmine\Player){
            if($cfg["Death"]["drop-heads"]){
                $item = Item::get(397, 3, 1);
                $item->setCustomName($entity->getName() . "'s head");
                $level->dropItem($entity->getPosition(), $item);
            }
        }
    }
    
}
