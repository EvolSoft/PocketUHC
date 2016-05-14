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
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerJoinEvent;
class EventListener extends PluginBase implements Listener{

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }
    
    public function onDeath(PlayerDeathEvent $event){
        
    }

}
