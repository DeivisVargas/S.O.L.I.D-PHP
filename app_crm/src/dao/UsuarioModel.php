<?php

namespace src\dao;
use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\ICadastro;
use src\interfaces\ILog ;
use src\interfaces\INotificacao;
class UsuarioModel extends BD implements ICadastro , ILog , INotificacao
{
    public function salvar()
    {
        // TODO: Implement salvar() method.
    }

    public function registrarLog(Log $log)
    {
        // TODO: Implement registrarLog() method.
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
        // TODO: Implement enviarNotificacao() method.
    }


}