<?php

namespace HerobrineAlive;

use pocketmine\scheduler\PluginTask;

class HerobrineChat extends PluginTask{
    public function onRun(){
        $chatid = rand(1, 10); //Get a random number to choose the message text
        
        if($chatid == "1"){
            $message = "<Herobrine> Where is your god now?";
        }elseif($chatid == "2"){
            $message = "<Herobrine> You can not defeat me!";
        }elseif($chatid == "3"){
            $message = "<Herobrine> I am your god now!";
        }elseif($chatid == "4"){
            $message = "<Herobrine> Your world is mine!";
        }elseif($chatid == "5"){
            $message = "<Herobrine> ";
        }elseif($chatid == "6"){
            $message = "<Herobrine> ";
        }elseif($chatid == "7"){
            $message = "<Herobrine> ";
        }elseif($chatid == "8"){
            $message = "<Herobrine> ";
        }elseif($chatid == "9"){
            $message = "<Herobrine> ";
        }elseif($chatid == "10"){
            $message = "<Herobrine> ";
        }
        //Broadcast $message
    }
}
