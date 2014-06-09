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
            $message = "<Herobrine>you can't run away from me! ";
        }elseif($chatid == "7"){
            $message = "<Herobrine>where are you i'm not can hurt you ";
        }elseif($chatid == "8"){
            $message = "<Herobrine>i am your worst nightmares! ";
        }elseif($chatid == "9"){
            $message = "<Herobrine> what can you exapet screaming!";
        }elseif($chatid == "10"){
            $message = "<Herobrine>i have some candy come have some ";
        }
        //Broadcast $message
    }
}
