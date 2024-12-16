<?php
    include("./config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    class Contact {
        private $bdd;
        private $nom;
        private $objet;
        private $email;
        private $telephone;
        private $dateMessage;
        private $message;

        public function __construct($bdd) {
            $this->bdd = $bdd;
        }

        public function setData($data) {
            $this->nom = htmlspecialchars($data['userNom']);
            $this->objet = htmlspecialchars($data['objetMessage']);
            $this->email = htmlspecialchars($data['userEmail']);
            $this->telephone = htmlspecialchars($data['userTelNumber']);
            $this->dateMessage = htmlspecialchars($data['dateMessage']);
            $this->message = htmlspecialchars($data['userMessage']);
        }

        public function save() {
            try {
                $sql = "INSERT INTO contact (nom, mail, telephone, dates, object, messages) 
                        VALUES (:nom, :mail, :telephone, :dates, :object, :messages)";
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([
                    ':nom' => $this->nom,
                    ':mail' => $this->email,
                    ':telephone' => $this->telephone,
                    ':dates' => $this->dateMessage,
                    ':object' => $this->objet,
                    ':messages' => $this->message,
                ]);
                return true;
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
                return false;
            }
        }
    }
?>