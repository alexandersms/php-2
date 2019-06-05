<?php
/**
 * Cette classe utilise PDO afin d'effectuer des operations sur la base des données
 */

 class Database{


    /**
     * Instance PDO
     * @var PDO
     */
    private $pdo;

     /**
      * Créer une instance PDO
      */
      public function connect(){
          // Connexion à MySQL
        $this->pdo = new PDO('mysql:host=localhost;dbname=php-2', 'root','',[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

      }

      /**
       * Exécute la requete SQL fournie et retourne
       */
      public function query(string $sql, string $className): ?array {
          // Execution de la requête
        $result = $this->pdo->query($sql);
        // Récupération des résultats
        return $result->fetchAll(PDO::FETCH_CLASS, $className);
      }

          /**
         * Execute une requête SQL pour :
         * - La création (INSERT INTO)
         * - La modification (UPDATE)
         * - La suppression (DELETE, DROP)
         * @param string $sql
         * @return int
         */
        public function exec(string $sql): int
        {
            return $this->pdo->exec($sql);
        }

      
 }