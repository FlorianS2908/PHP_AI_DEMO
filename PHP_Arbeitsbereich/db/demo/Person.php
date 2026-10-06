<?php
declare(strict_types=1);

// Eine Person ist hier ein Datenträger: kein SQL, keine HTML-Ausgabe.
class Person
{
    private int $id;
    private string $vorname;
    private string $nachname;

    public function __construct(int $id, string $vorname, string $nachname)
    {
        $this->id = $id;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getVorname(): string
    {
        return $this->vorname;
    }

    public function getNachname(): string
    {
        return $this->nachname;
    }
}
