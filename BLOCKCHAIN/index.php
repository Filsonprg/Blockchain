<?php
require "Block.php";
require "Ichain.php";
require "chain.php";
$ch = (new Chain)

    ->addBlock(new Block("Jiřetín", 0, date('Y-m-d H:i:s'), ""))
    ->addBlock(new Block("Liberec", 1, date('Y-m-d H:i:s'), ""));
    
var_dump($ch);
echo "Chain " . ($ch->isValid() ? "is" : "is not") . " valid.\n";
echo "Poslední město: " . $ch->getLastBlock()->getContent() . "\n";