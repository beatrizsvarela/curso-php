<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo" . PHP_EOL;
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return Conta::$numeroDeContas;
    }
}
