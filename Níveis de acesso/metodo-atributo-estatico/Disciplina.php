<?php

class Disciplina{

    public string $aluno;
    public float $notaTrabalho;
    public float $notaProva;
    public static $media = 0;
    public string $situacao;

    public function __construct(string $aluno, float $notaTrabalho, float $notaProva){
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
        self::$media = $this->notaProva + $this->notaTrabalho;
    }

    public function situacao(): string{
        if(self::$media >= 7){
            $this->situacao = 'aprovado';
        }else{
            $this->situacao = 'reprovado';
        }
        return "Aluno(a) {$this->aluno} está <strong>{$this->situacao}</strong> com a média ".self::$media."<hr>";
    }

    public static function situacaoAluno(float $nota): string{
        if($nota >= 7){
            return "Aluno(a) está <strong>aprovado</strong> com a média ".$nota."<hr>";
        }else{
            return "Aluno(a) está <strong>reprovado</strong> com a média ".$nota."<hr>";
        }
    }

}

?>