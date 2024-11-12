<?php

class Avaliacao
{
    public $id;
    public $nota;
    public $comentario;
    public $usuario_id;
    public $filme_id;

    public static function query($where, $params)
    {
        $database = new Database(config('database'));

        return $database->query(
            query: "SELECT
                        a.*,
                        u.id,
                        u.nome
                    FROM avaliacoes a
                    INNER JOIN usuarios u ON u.id = a.usuario_id
                    WHERE  $where",
            class: self::class,
            params: $params
        );
    }

    public static function all($filtro)
    {
        return (new self)->query('filme_id = :filtro', ['filtro' => "$filtro"])->fetchAll();
    }
}
