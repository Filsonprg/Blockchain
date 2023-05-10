### PHP Blockchaimn
- Tento projekt implementuje jednoduché úložiště založené na technologii blockchain. Úložiště umožňuje ukládání dat do řetězce bloků a zajišťuje bezpečnost dat díky využití hashovací funkce pro podepisování jednotlivých bloků.

## Instalace 
- Pro použití tohoto úložiště stačí stáhnout celý projekt a umístit ho na webový server s podporou PHP.

## Použití 
 - Pro použití tohoto úložiště je třeba vytvořit instanci třídy Chain a přidávat do ní jednotlivé bloky pomocí metody addBlock(). Bloky jsou v řetězci uloženy v pořadí, v jakém byly přidány.

 ```bash
    $chain = new Chain();
    $chain->addBlock(new Block("První blok"));
    $chain->addBlock(new Block("Druhý blok"));
    $chain->addBlock(new Block("Třetí blok"));
```
- Pro získání bloku podle ID lze použít metodu getBlock():
 ```bash

$block = $chain->getBlock(2);
 ```
- Pro získání posledního bloku v řetězci lze použít metodu getLastBlock():
 ```bash

$lastBlock = $chain->getLastBlock();
 ```
- Pro ověření platnosti řetězce lze použít metodu isValid(). Tato metoda vrátí true, pokud jsou všechny bloky v řetězci platné a následují po sobě v pořadí.
```bash

if ($chain->isValid()) {
    echo "Řetězec je platný";
} else {
    echo "Řetězec je neplatný";
}
 ```
## UML

![App Screenshot](https://raw.githubusercontent.com/Filsonprg/Blockchain/main/BLOCKCHAIN/UML.png)
