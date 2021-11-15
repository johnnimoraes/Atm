<?php

namespace Atm;

use Atm\Bill;
use Atm\Withdraw;

class Atm
{
  private $bill;
  private $withdraw;

  /* Inicializando a classe Bill e Withdraw no metodo construtor da classe Atm */
  public function __construct()
  {
    $this->bill =  new Bill();

    /* Passando o objeto anterior Bill para a classe Withdraw,(ela precisa ter acesso as notas que foram incluidas) */
    $this->withdraw =  new Withdraw($this->bill);
  }

  /*Metodos de retorno das classes Instaciadas. */

  public function bill(): Bill
  {
    return $this->bill;
  }

  public function withdraw(): Withdraw
  {
    return $this->withdraw;
  }
}
