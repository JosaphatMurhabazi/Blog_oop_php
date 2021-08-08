<?php

namespace App\Table;

use Core\Table\Table;

class CategoryTable extends Table
{
    protected $table = "categories";
    public function last()
    {
        return $this->query("
        SELECT articles.id,articles.title,articles.contenu,articles.date,categories.title as categorie
        FROM articles
        LEFT JOIN categories ON category_id=categories.id
        ORDER BY articles.DATE DESC");
    }
}
