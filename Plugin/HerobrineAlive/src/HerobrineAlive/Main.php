<?php

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;

class Main extends PluginBase implements Listener, CommandExecutor{
    public funtion onEnable(){
        $this->getLogger()->log("[INFO] HerobrineAlive Loaded!");
    }
    
    public function onCommand(){
        //HerobrineAlive Commands
    }
    
    public function HerobrineAI(){
        /*
         * Here wil be Herobrines Mob AI and other things.
         * Herobrine will have his own tag.
         * He will also have disableable minions like zombies, skeletons, and others.
         * He will be able to grief, talk, kill, build, and much more.
         * Many things will be disableable
         */
    }
    
    public function onEvent(){
        //Not sure if ill need this yet but just in case
    }
    
    public function onDisable(){
        $this->getLogger()->log("[INFO] HerobrineAlive Unloaded!");
    }
}
