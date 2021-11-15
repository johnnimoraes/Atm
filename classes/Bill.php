<?php

namespace Atm;

class Bill
{
  private $bills = [];


  public function addBill(int $bill)
  {
    /* Acresentando notas ao Atm*/
    $this->bills[] = $bill;

    /* Retornando o proprio objeto da classe, possibilitando os chained methods */
    return $this;
  }

  /* Função para retornar as notas para o Withdraw */
  public  function getBills()
  {
    return $this->bills;
  }
}
