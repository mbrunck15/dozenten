<?php

class Angestellte implements ILohn
{
    private int $lohn;

    /**
     * @param int $lohn
     */
    public function __construct(int $lohn)
    {
        $this->lohn = $lohn;
    }

    /**
     * @param int $lohn
     */


    public function getLohn(): int
    {
        return $this->lohn;
    }

    public function setLohn(int $lohn): void
    {
        $this->lohn = $lohn;
    }

//    public function getNebenkosten(): int
//    {
//        return $this->nebenkosten;
//    }
//
//    public function setNebenkosten(int $nebenkosten): void
//    {
//        $this->nebenkosten = $nebenkosten;
//    }
//

    public function getLohngesamt():int {

        return $this->lohn+($this->lohn*0.4);
    }

}