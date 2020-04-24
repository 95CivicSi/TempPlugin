<?php
declare(strict_types=1);

namespace BreathTakinglyBinary\tempplugin;

use pocketmine\plugin\PluginBase;
class TempPlugin extends PluginBase{

    public function onEnable(){
        $this->getLogger()->debug("Hello World!");
    }

}