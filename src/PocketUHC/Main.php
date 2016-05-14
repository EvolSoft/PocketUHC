<?php
/*
 * PocketUHC (v1.0) by EvolSoft
 * Developer: EvolSoft (TheDiamondYT)
 * Website: http://www.evolsoft.tk
 * Date: 14/05/2016 12:41 PM (UTC)
 * Copyright & License: (C) 2016 EvolSoft
 * Licensed under MIT (https://github.com/EvolSoft/PocketUHC/blob/master/LICENSE)
 */
namespace PocketUHC;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
class Main extends PluginBase implements Listener{
    //About Plugin Const
	const PRODUCER = "EvolSoft";
	const VERSION = "1.0";
	const MAIN_WEBSITE = "http://www.evolsoft.tk";

	//Prefix
	const PREFIX = "&8[&6PocketUHC&8] ";
	public $cfg;
	
	public function translateColors($symbol, $message){
		$message = str_replace($symbol."0", TextFormat::BLACK, $message);
		$message = str_replace($symbol."1", TextFormat::DARK_BLUE, $message);
		$message = str_replace($symbol."2", TextFormat::DARK_GREEN, $message);
		$message = str_replace($symbol."3", TextFormat::DARK_AQUA, $message);
		$message = str_replace($symbol."4", TextFormat::DARK_RED, $message);
		$message = str_replace($symbol."5", TextFormat::DARK_PURPLE, $message);
		$message = str_replace($symbol."6", TextFormat::GOLD, $message);
		$message = str_replace($symbol."7", TextFormat::GRAY, $message);
		$message = str_replace($symbol."8", TextFormat::DARK_GRAY, $message);
		$message = str_replace($symbol."9", TextFormat::BLUE, $message);
		$message = str_replace($symbol."a", TextFormat::GREEN, $message);
		$message = str_replace($symbol."b", TextFormat::AQUA, $message);
		$message = str_replace($symbol."c", TextFormat::RED, $message);
		$message = str_replace($symbol."d", TextFormat::LIGHT_PURPLE, $message);
		$message = str_replace($symbol."e", TextFormat::YELLOW, $message);
		$message = str_replace($symbol."f", TextFormat::WHITE, $message);
		$message = str_replace($symbol."k", TextFormat::OBFUSCATED, $message);
		$message = str_replace($symbol."l", TextFormat::BOLD, $message);
		$message = str_replace($symbol."m", TextFormat::STRIKETHROUGH, $message);
		$message = str_replace($symbol."n", TextFormat::UNDERLINE, $message);
		$message = str_replace($symbol."o", TextFormat::ITALIC, $message);
		$message = str_replace($symbol."r", TextFormat::RESET, $message);
		return $message;
	}
	
	public function onEnable(){
	    if(!$this->getServer()->getName() === "Genisys"){
	        $this->getLogger()->critical("This plugin must be run using the Genisys server software.");
	        $this->getServer()->getPluginManager()->disablePlugin($this);
	    }
	    
	    $this->saveDefaultConfig();
	    $this->cfg = $this->getConfig()->getAll();
	    $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
	}
	
 }
