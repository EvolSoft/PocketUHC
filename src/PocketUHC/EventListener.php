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
    
}
