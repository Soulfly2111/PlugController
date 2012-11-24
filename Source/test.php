
<?php
/**
 * Ein einfaches Beispiel, wie man die SQLite3-Klasse erweitert, die Parameter
 * des Konstruktors (__construct) verändert und mit Hilfe der open-Methode dann
 * die Datenbank initialisiert.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('plug-controller.db');
    }
}

$db = new MyDB();

$db->exec('CREATE TABLE plugs (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, groupName TEXT, groupCode TEXT, code TEXT )');
$db->exec("INSERT INTO plugs ( name, groupName, groupCode, code) VALUES ('Subwoofer','Living Room', '11111', '1')");
$db->exec("INSERT INTO plugs ( name, groupName, groupCode, code) VALUES ( 'Front Lamps','Living Room', '11111', '2')");
$db->exec("INSERT INTO plugs ( name, groupName, groupCode, code) VALUES ( 'Back Lamps','Living Room', '11111', '3')");

$results = $db->query('SELECT id, name FROM plugs order by id ');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>
