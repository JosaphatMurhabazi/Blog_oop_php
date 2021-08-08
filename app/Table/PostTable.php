<?php

namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{
    protected $table = 'articles';
    public function last()
    {
        return $this->query("
        SELECT articles.id,articles.title,articles.contenu,articles.date,categories.title as categorie
        FROM articles
        LEFT JOIN categories ON category_id=categories.id
        ORDER BY articles.DATE DESC");
    }
    public function lastByCategory($category_id)
    {
        return $this->query("
        SELECT articles.id,articles.title,articles.contenu,articles.date,categories.title as categorie
        FROM articles
        LEFT JOIN categories ON category_id=categories.id
        WHERE articles.category_id=?
        ORDER BY articles.DATE DESC", [$category_id]);
    }
    public function find($id)
    {
        return $this->query("
        SELECT articles.id,articles.title,articles.contenu,articles.date,categories.title as categorie
        FROM articles
        LEFT JOIN categories ON category_id=categories.id
        WHERE articles.id=?", [$id], true);
    }
}
