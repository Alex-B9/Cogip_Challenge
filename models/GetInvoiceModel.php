<?php

namespace App\models;

use App\models\crud\ReadModel;

class GetInvoiceModel
{
    private int $peopleID;
    private array $data;

    private ReadModel $readSQL;

    public function __construct(int $idPeople)
    {
        $this->peopleID = $idPeople;
        $this->readSQL = new ReadModel();
    }

    public function getInvoicesData(): array
    {
        $this->data = [];

        foreach ($this->readSQL->getInvoiceByPeopleId($this->peopleID) as $item) {
            $this->data[] = $item;
        }

        return $this->data;
    }
}
