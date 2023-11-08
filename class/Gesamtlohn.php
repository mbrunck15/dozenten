<?php

class Gesamtlohn
{

        private array $kosten=[];

    public function testdaten()
    {

        //Ausführlich
        $this->kosten[] = new Selbstaendig(10,5);
        $this->kosten[] = new Selbstaendig(5,5);
        $this->kosten[] = new Angestellte(1000);
        $this->kosten[] = new Angestellte(1000);

    }




        public function getGesamtkosten():int{

        $gesamtkosten=0;
        foreach ($this->kosten as $einzelkosten) {
            $gesamtkosten+=$einzelkosten->getLohngesamt();

        }
        return $gesamtkosten;
    }








}