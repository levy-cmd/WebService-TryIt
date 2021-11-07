<?php
	require_once 'ConnexionManager.php';

	/**
	 * Classe de gestion des accès aux article
	 */
	class ArticleDao
	{
		private $bdd;

		public function __construct()
		{
			$this->bdd = (new ConnexionManager)->getInstance();
		}

		public function getList()
		{
			$data = $this->bdd->query('SELECT * FROM article');
			return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
		}

		public function getById($id)
		{
			$data = $this->bdd->query('SELECT * FROM article WHERE id = '.$id);
			return $data->fetch(PDO::FETCH_OBJ);
		}

		public function getByCategoryId($id)
		{
			$data = $this->bdd->query('SELECT * FROM article WHERE categorie = '.$id);
			return $data->fetchAll(PDO::FETCH_CLASS, 'Categorie');
		}

		public function addArticle($titre,$texte,$categorie)
		{
			$date=date('Y-m-d H:i:s');
			$data = $this->bdd->query('INSERT INTO article (`titre`,`contenu`,`categorie`,`dateCreation`,`dateModification`) values ("'.$titre.'","'.$texte.'","'.$categorie.'","'.$date.'","'.$date.'")');
			return $data;
		}
	}
?>