<?php



class Selbstaendig implements ILohn
{
        private int $stundenlohn;
        private int $stundenanzahl;

    /**
     * @param int $stundenlohn
     * @param int $stundenanzahl
     */
    public function __construct(int $stundenlohn, int $stundenanzahl)
    {
        $this->stundenlohn = $stundenlohn;
        $this->stundenanzahl = $stundenanzahl;
    }

    public function getStundenlohn(): int
    {
        return $this->stundenlohn;
    }

    public function setStundenlohn(int $stundenlohn): void
    {
        $this->stundenlohn = $stundenlohn;
    }

    public function getStundenanzahl(): int
    {
        return $this->stundenanzahl;
    }

    public function setStundenanzahl(int $stundenanzahl): void
    {
        $this->stundenanzahl = $stundenanzahl;
    }


    public function getLohngesamt() : int{

        return $this->stundenanzahl*$this->stundenlohn;
    }


}