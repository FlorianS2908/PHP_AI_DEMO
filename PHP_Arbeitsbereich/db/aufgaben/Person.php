<?php
declare(strict_types=1);
class Person
{
    // TODO 03a: Private Attribute id, vorname und nachname deklarieren.

    public function __construct(int $id, string $vorname, string $nachname)
    {
        // TODO 03b: Die Parameter in die Attribute dieses Objekts übernehmen.
    }

    public function getId(): int
    {
        // TODO 03c: Attributwert zurückgeben. Vorläufigen Rückgabewert ersetzen.
        return 0;
    }

    public function getVorname(): string
    {
        // TODO 03d: Attributwert zurückgeben. Vorläufigen Rückgabewert ersetzen.
        return "";
    }

    public function getNachname(): string
    {
        // TODO 03e: Attributwert zurückgeben. Vorläufigen Rückgabewert ersetzen.
        return "";
    }
}
