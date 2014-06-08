<?php

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\event\Listener;
use pocketmine\Player;

class Main extends PluginBase implements Listener, CommandExecutor{
    public funtion onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->log("[INFO] HerobrineAlive Loaded!");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        switch($cmd->getName()){
            case "herobrinealive":
                if($args[0] == "release"){
                    //Start HerobrineAI()
                    $sender->sendMessage("[HerobrineAlive] Herobrine has been released!");
                }elseif($args[0] == "kill"){
                    //Stop HerobrineAI() and remove his entity packets
                    $sender->sendMessage("[HerobrineAlive] Herobrine has been killed!");
                }elseif($args[0] == "attack"){
                    if($args[1] == instance of player){
                        //Have Herobrine go after $args[1]
                        $sender->sendMessage("[HerobrineAlive] Herobrine is now after " . $args[1] . "!");
                    }else{
                        $sender->sendMessage("[HerobrineAlive] Target player not found!");
                    }
                }else{
                    $sender->sendMessage("Usage: /HerobrineAlive <RELEASE|KILL|ATTACK> [PLAYER]");
                }
            break;
        }
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
