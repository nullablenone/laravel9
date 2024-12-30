<?php


class Koki
{
    private Alat $alat;

    public function __construct(Alat $alat)
    {
        $this->alat = $alat;
    }

    public function masak()
    {
        return $this->alat->potong();
    }
}
