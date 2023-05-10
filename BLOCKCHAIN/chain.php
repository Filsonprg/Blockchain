<?php
Require("Block.php");

class Chain implements IChain {
    private $chain;

    public function __construct() {
        $this->chain = array($this->create_genesis_block());
    }

    private function create_genesis_block() {
        return new Block(0, date('Y-m-d H:i:s'), '', 'Genesis Block');
    }

    public function addBlock(Block $block): static {
        $last_block = $this->getLastBlock();
        $block->previous_hash = $last_block->hash;
        $this->chain[] = $block;
        return $this;
    }

    public function getBlock(int $id): ?Block {
        if (array_key_exists($id, $this->chain)) {
            return $this->chain[$id];
        } else {
            return null;
        }
    }

    public function getLastBlock(): ?Block {
        return end($this->chain);
    }

    public function isValid(): bool {
        for ($i = 1; $i < count($this->chain); $i++) {
            $current_block = $this->chain[$i];
            $previous_block = $this->chain[$i-1];
            if ($current_block->hash !== $current_block->calculate_hash()) {
                return false;
            }
            if ($current_block->previous_hash !== $previous_block->hash) {
                return false;
            }
        }
        return true;
    }
}

?>