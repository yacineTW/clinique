<?php
class User {
    private $id;
    private $nom;
    private $email;
    private $motDePasse;
    private $role; // 'admin', 'medecin', 'patient'

    public function __construct($nom, $email, $motDePasse, $role) {
        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
        $this->role = $role;
    }

    public function create($pdo) {
        $stmt = $pdo->prepare("INSERT INTO users (nom, email, mot_de_passe, role) VALUES (:nom, :email, :motDePasse, :role)");
        $stmt->execute([
            ':nom' => $this->nom,
            ':email' => $this->email,
            ':motDePasse' => $this->motDePasse,
            ':role' => $this->role
        ]);
    }

    public function read($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function update($pdo) {
        $stmt = $pdo->prepare("UPDATE users SET nom = :nom, email = :email, role = :role WHERE id = :id");
        $stmt->execute([
            ':nom' => $this->nom,
            ':email' => $this->email,
            ':role' => $this->role,
            ':id' => $this->id
        ]);
    }

    public function delete($pdo, $id) {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}