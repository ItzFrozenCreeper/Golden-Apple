<?php

namespace ga;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\entity\Effect;

class Main extends PluginBase implements Listener {

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this,$this);
	$this->getServer()->getLogger()->info("Activated");
}

public function eat(PlayerItemConsumeEvent $ev){

   $p=$ev->getPlayer();

   if($ev->getItem()->getId() === 322){

   $p->addEffect(Effect::getEffect(10)->setAmplifier(4)->setDuration(100)->setVisible(true));
$p->addEffect(Effect::getEffect(21)->setAmplifier(2)->setDuration(20*120)->setVisible(true));


    }
 }
}
