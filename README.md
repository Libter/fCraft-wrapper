# fCraft-wrapper
Jest to bardzo fajny wrapper do API od fCraft.pl

## Pobieranie
Żeby pobrać tego wrappera, można użyć composera.
`composer require fcraft-wrapper/fcraft-wrapper`

Zobacz na: [packagist.org](https://packagist.org/packages/fcraft-wrapper/fcraft-wrapper)

## Zastosowanie
Na samym początku trzeba stworzyć klasę, w którym podamy nasz klucz
```php
$fCraft = new fCraft("klucz0");
```

## Metody
#### `deletedCuboid($server, $cuboid)`
**Parametry**
* `$server` - serwer
* `$cuboid` - nazwa cuboida

**Informacje**
* przykładowe użycie: `$fCraft->deletedCuboid('hard', 'wojak2017_dom');`
* zwraca: [klik](https://fcraft.pl/temat-api-0-server-cuboid-deleted-name-dost%C4%99p-do-rejestru-cuboid%C3%B3w-usuni%C4%99tych-909)

---

#### `serverInformation($server)`
**Parametry**
* `$server` - serwer

**Informacje**
* przykładowe użycie: `$fCraft->serverInformation('hard');`
* zwraca: [klik](https://fcraft.pl/temat-api-0-server-info-informacje-o-serwerze-1444)

---

#### `playerInformation($player)`
**Parametry**
* `$player` - nazwa gracza

**Informacje**
* przykładowe użycie: `$fCraft->playerInformation('Libter');`
* zwraca: [klik](https://fcraft.pl/temat-api-p-api-0-player-nick-globalne-informacje-o-graczu-1479)

---

#### `player($server, $uuid)`
**Parametry**
* `$server` - serwer
* `$uuid` - UUID gracza

**Informacje**
* przykładowe użycie: `$fCraft->player('hard', '<uuid>');`
* zwraca: [klik](https://fcraft.pl/temat-api-0-server-player-uuid-serwerowe-publiczne-informacje-o-graczu-1480)

---

#### `playerStatistics($server, $uuid, $key1)`
**Parametry**
* `$server` - serwer
* `$uuid` - UUID gracza
* `$key1` - klucz z API/1

**Informacje**
* przykładowe użycie: `$fCraft->playerStatistics('hard', '<uuid>', '<key1>');`
* zwraca: [klik](https://fcraft.pl/temat-api-1-server-player-uuid-statistics-szczeg%C3%B3%C5%82owe-statystyki-gracza-1481)

---

#### `playerTransactions($server, $uuid, $key1)`
**Parametry**
* `$server` - serwer
* `$uuid` - UUID gracza
* `$key1` - klucz z API/1

**Informacje**
* przykładowe użycie: `$fCraft->playerTransactions('hard', '<uuid>', '<key1>');`
* zwraca: [klik](https://fcraft.pl/temat-api-1-server-player-uuid-transactions-szczeg%C3%B3%C5%82owa-historia-transakcji-gracza-1482)

---

#### `cuboidList($server, $world, $uuid, $key1)`
**Parametry**
* `$server` - serwer
* `$world` - świat
* `$uuid` - UUID gracza
* `$key1` - klucz z API/1

**Informacje**
* przykładowe użycie: `$fCraft->cuboidList('hard', 'world', '<uuid>', '<key1>');`
* zwraca: [klik](https://fcraft.pl/temat-api-0-api-1-server-cuboid-world-informacje-o-cuboidach-gracza-1483)

---

#### `cuboid($server, $world, $cuboid)`
**Parametry**
* `$server` - serwer
* `$world` - świat
* `$cuboid` - nazwa cuboida

**Informacje**
* przykładowe użycie: `$fCraft->cuboid('serwer', 'swiat', 'cuboid');`
* zwraca: [klik](https://fcraft.pl/temat-api-0-api-1-server-cuboid-world-informacje-o-cuboidach-gracza-1483)
