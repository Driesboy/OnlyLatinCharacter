<?php

declare(strict_types=1);

namespace OnlyLatinCharacters;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getLogger()->info("§bOnly Latin Characters enabled!");
    }


    public function onDisable()
    {
        $this->getLogger()->info("§bOnly Latin Characters disabled!");
    }

    public function onPlayerChat(PlayerChatEvent $event)
    {
        if (preg_match('/[^\p{Common}\p{Latin}]/u', $event->getMessage())) {
            $event->setCancelled();
        }
    }

}
