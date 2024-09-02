<?php
require_once("C:/xampp\htdocs\web2A\config.php");
require_once("C:/xampp\htdocs\web2A\Models\RendezVous.php");
require_once("C:/xampp\htdocs\web2A\Models\DossierMedical.php");

class DoctorController {
    private $pdo;

    public function __construct() {
        $this->pdo = config::getConnexion();
    }

    // 1. Gérer les rendez-vous (ajouter un rendez-vous)
    public function addAppointment($patientId, $medecinId, $dateHeure) {
        var_dump($patientId,$medecinId,$dateHeure);
        $rendezVous = new RendezVous($patientId, $medecinId, new DateTime($dateHeure));
        $rendezVous->setStatut('programmé');
        $rendezVous->setDateHeure(new DateTime($dateHeure));
        $rendezVous->setPatientId($patientId);
        $rendezVous->setMedecinId($medecinId);
        $rendezVous->create($this->pdo);
    }

    // 2. Modifier un rendez-vous
    public function updateAppointment($id, $dateHeure, $statut) {
        $rendezVous = new RendezVous(null, null, new DateTime($dateHeure));
        $rendezVous->setId($id);
        $rendezVous->setStatut($statut);
        $rendezVous->setDateHeure(new DateTime($dateHeure));
        $rendezVous->update($this->pdo);
    }

    // 3. Supprimer un rendez-vous
    public function deleteAppointment($id) {
        $rendezVous = new RendezVous(null, null, null);
        $rendezVous->delete($this->pdo, $id);
    }

    // 4. Afficher les rendez-vous d'un médecin
    public function getAppointmentsByDoctor($medecinId) {
     //   $stmt = $this->pdo->prepare("SELECT * FROM rendez_vous WHERE medecin_id = :medecinId");
        $stmt = $this->pdo->prepare("SELECT * FROM rendez_vous");
        $stmt->execute();
       // $stmt->execute([':medecinId' => $medecinId]);
        return $stmt->fetchAll();
    }

    // 5. Accéder aux dossiers des patients
    public function getPatientRecord($patientId) {
        $dossierMedical = new DossierMedical(null, null);
        return $dossierMedical->read($this->pdo, $patientId);
    }

    // 6. Mettre à jour les informations médicales d'un patient
    public function updateHistorique($patientId, $historique) {
        var_dump($historique);
        var_dump($patientId);
        $stmt = $this->pdo->prepare("UPDATE dossiers_medicals SET historique = :historique WHERE patient_id = :patientId");
        $stmt->execute([
            ':historique' => $historique,
            ':patientId' => $patientId
        ]);
    }

    // 7. Rechercher des patients
    public function searchPatients($criteria) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE role = 'patient' AND (nom LIKE :criteria OR email LIKE :criteria)");
        $stmt->execute([':criteria' => '%' . $criteria . '%']);
        return $stmt->fetchAll();
    }

    public function getAllDoctors()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE role = 'medecin'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllPatients()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE role = 'patient'");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllDossiers()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM dossiers_medicals");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getDossierByPatientId($patientId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM dossiers_medicals WHERE patient_id = :patientId");
        $stmt->execute([':patientId' => $patientId]);
        return $stmt->fetch();
    }
    public function addHistorique($patientId, $historique) {
        $stmt = $this->pdo->prepare("INSERT INTO dossiers_medicals (patient_id, historique) VALUES (:patient_id, :historique)");
        $stmt->execute([
            ':patient_id' => $patientId,
            ':historique' => $historique
        ]);
    }
    public function HistoriqueExists($patientId) {
        $stmt = $this->pdo->prepare("SELECT * FROM dossiers_medicals WHERE patient_id = :patientId");
        $stmt->execute([':patientId' => $patientId]);
        return $stmt->fetch();
    }

    public function getAppointementsByPatient($int)
    {
        $query = "
        SELECT rendez_vous.*, users.nom AS doctor_name 
        FROM rendez_vous 
        JOIN users ON rendez_vous.medecin_id = users.id 
        WHERE rendez_vous.patient_id = :patientId
    ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':patientId' => $int]);
        return $stmt->fetchAll();
    }
}