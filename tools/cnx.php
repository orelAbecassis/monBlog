<?php
//connexion à la BDD :
class ConnexionBase

 {
   private $servername = 'localhost';
   private $nom_bd='blog1';
   private $username = 'root';
   private $password = '';
   private $connect;

   function __construct( $servername = null,$nom_bd = null,$username=null, $password = null)
    {
        if($servername !=null)
        {
            $this->servername =$servername;
            $this->nom_bd =$nom_bd;
            $this->username =$username;
            $this->password =$password;
        }

          try{
            //On établit la connexion
            $this->connect =new PDO ('mysql:host' .$this->servername. ';dbname='.$this->nom_bd, $this->username, $this->password, 
            array(PDO:: MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8MB4', PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING ));
            
        }
        catch (PDOException $e){
            die('Erreur : Impossible de se connecter à la BDD !' );
        }
    }

  public function connexionBDD()
  {
    return $this->connect;
  }
 }

 $cnx =new connexionBase;
 $BD=$cnx->connexionBDD();