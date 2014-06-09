<?php

namespace HerobrineAlive;

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
                    $this->getServer()->getScheduler()->scheduleTask(new StartHerobrineAI($this), 1);
                    $sender->sendMessage("[HerobrineAlive] Herobrine has been released!");
                }elseif($args[0] == "kill"){
                    $this->getServer()->getScheduler()->scheduleTask(new StopHerobrineAI($this), 1);
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

    public function onDisable(){
        $this->getLogger()->log("[INFO] HerobrineAlive Unloaded!");
    }
}
