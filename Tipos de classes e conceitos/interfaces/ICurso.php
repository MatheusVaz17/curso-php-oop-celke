<?php
//As classes que implementam as interfaces obrigatoriamente devem implementar os métodos da interface
interface ICurso{
    
    public function disciplina(string $nomeDisciplina);
    public function professor(string $nomeProfessor);

}

?>