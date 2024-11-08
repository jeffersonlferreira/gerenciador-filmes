<?php

class Filmes
{
    public $id;
    public $titulo;
    public $genero;
    public $ano_lancamento;
    public $descricao;
    public $imagem;
    public $usuario_id;
    public $nota_avaliacao;

    public static function query($where, $params)
    {
        $database = new Database(config('database'));

        return $database->query(
            query: "SELECT
                        f.*,
                        ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao
                    FROM filmes f
                    LEFT JOIN avaliacoes a ON a.filme_id = f.id
                    WHERE $where
                    GROUP BY f.id",
            class: self::class,
            params: $params);
    }

    public static function all($filtro)
    {
        return (new self)->query('f.titulo like :filtro', ['filtro' => "%{$filtro}%"])->fetchAll();
    }

    public static function get($id)
    {
        return (new self)->query('f.id = :id', ['id' => $id])->fetch();
    }

    public static function meus($usuario_id)
    {
        return (new self)->query('f.usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();
    }
}