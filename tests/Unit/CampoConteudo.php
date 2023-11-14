<?php

namespace Tests\Unit;
use App\Models\Documents;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function validaTamanhoMaximoCampoConteudo(): void
    {
        $caixa = Documents::create([
            'conteudo' => 'Conteudo',
        ]);
        $this->assertInstanceOf(Documents::class, $caixa);
        $this->assertEquals('20', strlen($caixa->contem('conteudo')));
    }

    public function validaCategoria(): void
    {
        $caixa = Documents::create([
            'conteudo' => 'Conteudo',
            'titulo' => 'Titulo'
        ]);

        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );

        if ($caixa->contem('Remessa')) {
            $this->assertTrue($caixa->contem('Semestre'));
        };

        if ($caixa->contem('Remessa Parcial')) {
            $this->assertTrue($caixa->contem($meses));
        };
    }

}
