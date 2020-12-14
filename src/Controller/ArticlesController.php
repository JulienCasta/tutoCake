<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;

class ArticlesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }

    public function view($slug = null)
{
    $article = $this->Articles->findById($slug)->firstOrFail();
    $catégories=[];
        $connexion = ConnectionManager::get('default');
        $result = $connexion->execute('SELECT catégories.nom FROM articles INNER JOIN cat_articles ON articles.id = article_id INNER JOIN catégories on catégories.id = cat_id WHERE articles.id = ?', [$article->id]);
        $rows = $result->fetchAll('assoc');
        foreach ($rows as $row) {
            $catégories[] = $row;
        }
    $this->set(compact('article'));
    $this->set(compact('catégories'));
}
}