<?php
class DossierMedical {
    private $id;
    private $patientId;
    private $historique;
    private $dateCreation;

    public function __construct($patientId, $historique) {
        $this->patientId = $patientId;
        $this->historique = $historique;
        $this->dateCreation = new DateTime();
    }

    public function create($pdo) {
        $stmt = $pdo->prepare("INSERT INTO dossiers_medicals (patient_id, historique, date_creation) VALUES (:patientId, :historique, :dateCreation)");
        $stmt->execute([
            ':patientId' => $this->patientId,
            ':historique' => $this->historique,
            ':dateCreation' => $this->dateCreation->format('Y-m-d H:i:s')
        ]);
    }

    public function read($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM dossiers_medicals WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function update($pdo) {
        $stmt = $pdo->prepare("UPDATE dossiers_medicals SET historique = :historique WHERE id = :id");
        $stmt->execute([
            ':historique' => $this->historique,
            ':id' => $this->id
        ]);
    }

    public function delete($pdo, $id) {
        $stmt = $pdo->prepare("DELETE FROM dossiers_medicals WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
