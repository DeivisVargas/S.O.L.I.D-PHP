<?php

namespace src\dao;
use src\BD;
use src\componentes\Notificacao;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;
class LeadModel extends BD implements ICadastro , INotificacao
{
    public function salvar()
    {
        // TODO: Implement salvar() method.
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // TODO: Implement enviarNotificacao() method.
    }


}