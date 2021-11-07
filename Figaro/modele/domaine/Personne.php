<?php
	/**
	 * Classe métier représentant un user
	 */
	class Personne
	{
		public $id;
		public  $nom;
		public  $prenom;
		public  $login;
		public  $mdp;
		public  $admin;

		function __construct()
		{
			
		}
		public function setNom(string $n): void
		{
			$this->nom = $n;
		}
		public function setPrenom(string $p): void
		{
			$this->prenom = $p;
		}
		public function setLogin(string $l): void
		{
			$this->login = $l;
		}
		public function setAdmin(string $a): void
		{
			$this->admin = $a;
		}
		public function setMdp(string $m): void
		{
			$this->mdp = $m;
		}
	}
?>