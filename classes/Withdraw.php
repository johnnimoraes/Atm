<?php

namespace Atm;


class Withdraw
{
  private $ammount;
  private $bills;
  private $result = [];

  /* Recebendo o objeto Bill que foi instaciado em Atm */
  public function __construct(Bill $b)
  {
    $this->bills = $b;
  }

  public function ammount(float $ammount): array
  {
    /* Executando a logica necessaria */
    $this->ammount = $ammount;

    $bills = $this->bills->getBills();

    foreach ($bills as $bill) {
      $this->result[$bill] = floor($this->ammount  / $bill);
      $this->ammount = $this->ammount - $this->result[$bill] * $bill;
    }

    /* Retornando o resultado como array chave=>valor */
    return $this->result;
  }
}
