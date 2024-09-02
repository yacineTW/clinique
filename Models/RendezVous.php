<?php
class RendezVous {
    private $id;
    public $patientId;
    public $medecinId;
    public $dateHeure;
    public $statut;

    public function __construct($patientId, $medecinId, $dateHeure) {
        $this->patientId = $patientId;
        $this->medecinId = $medecinId;
        $this->dateHeure = $dateHeure;
        $this->statut = 'programmé'; //     statut ENUM('programmé', 'annulé', 'terminé') DEFAULT 'programmé',
    }

    public function create($pdo) {
        $stmt = $pdo->prepare("INSERT INTO rendez_vous (patient_id, medecin_id, date_heure, statut) VALUES (:patientId, :medecinId, :dateHeure, :statut)");
        $stmt->execute([
            ':patientId' => $this->patientId,
            ':medecinId' => $this->medecinId,
            ':dateHeure' => $this->dateHeure->format('Y-m-d H:i:s'),
            ':statut' => $this->statut
        ]);
    }

    public function read($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM rendez_vous WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function update($pdo) {
        $stmt = $pdo->prepare("UPDATE rendez_vous SET date_heure = :dateHeure, statut = :statut WHERE id = :id");
        $stmt->execute([
            ':dateHeure' => $this->dateHeure->format('Y-m-d H:i:s'),
            ':statut' => $this->statut,
            ':id' => $this->id
        ]);
    }

    public function delete($pdo, $id) {
        $stmt = $pdo->prepare("DELETE FROM rendez_vous WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function setDateHeure(DateTime $param)
    {
        $this->dateHeure = $param;
    }
    public function setStatut($param)
    {
        $this->statut = $param;
    }
    public function setId($param)
    {
        $this->id = $param;
    }

    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;
    }
    public function setMedecinId($medecinId)
    {
        $this->medecinId = $medecinId;
    }
}