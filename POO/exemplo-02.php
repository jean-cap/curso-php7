<?php


/**
 * Class Carro
 */
class Carro
{
    private string $modelo;
    private float $motor;
    private int $ano;

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return float
     */
    public function getMotor(): float
    {
        return $this->motor;
    }

    /**
     * @param float $motor
     */
    public function setMotor(float $motor): void
    {
        $this->motor = $motor;
    }

    /**
     * @return int
     */
    public function getAno(): int
    {
        return $this->ano;
    }

    /**
     * @param int $ano
     */
    public function setAno(int $ano): void
    {
        $this->ano = $ano;
    }

    /**
     * @return array
     */
    public function exibe(): array
    {
        return [
            'modelo' => $this->getModelo(),
            'motor' => $this->getMotor(),
            'ano' => $this->getAno()
        ];
    }
}

$gol = new Carro();
$gol->setModelo('Gol');
$gol->setMotor(1.0);
$gol->setAno(2017);

echo '<pre>';
var_dump($gol->exibe());