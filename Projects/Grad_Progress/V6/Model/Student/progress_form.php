<?php 
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
class Form
{
    public $formid;
    public $uid;
    public $timecompleted;
    public $identifyadvisor;
    public $identifyadvisorsemester;
    public $programadvisorapproved;
    public $programadvisorapprovedsemester;
    public $teachingmentorship;
    public $teachingmentorshipsemester;
    public $requiredclasses;
    public $requiredclassessemester;
    public $fullcommitteeformed;
    public $fullcommitteeformedsemester;
    public $programcommitteapproved;
    public $programcommitteapprovedsemester;
    public $writtenqualifier;
    public $writtenqualifiersemester;
    public $proposal;
    public $proposalsemester;
    public $dissertationdefense;
    public $dissertationdefensesemester;
    public $finaldocument;
    public $finaldocumentsemester;
    public $notes;
    public $incompliance;
    
    public function __construct( $id )
    {
       try {
    
            // Connect to the data base and select it.
            $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            $query = "SELECT * from Grad_Prog_V5.form_data where form_id = " . $id;
            $statement = $db->prepare($query);
            $statement->execute();   
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                
                $this->formid = $id;
                $this->timecompleted = htmlspecialchars($row['time_completed']);
                $this->identifyadvisor = htmlspecialchars($row['identify_advisor']);
                $this->identifyadvisorsemester = htmlspecialchars($row['identify_advisor_semester']);   
                $this->programadvisorapproved = htmlspecialchars($row['program_advisor_approved']);
                $this->programadvisorapprovedsemester = htmlspecialchars($row['program_advisor_approved_semester']);
                $this->teachingmentorship = htmlspecialchars($row['teaching_mentorship']);
                $this->teachingmentorshipsemester = htmlspecialchars($row['teaching_mentorship_semester']);
                $this->requiredclasses = htmlspecialchars($row['required_classes']);
                $this->requiredclassessemester = htmlspecialchars($row['required_classes_semester']);
                $this->fullcommitteeformed = htmlspecialchars($row['full_committee_formed']);
                $this->fullcommitteeformedsemester = htmlspecialchars($row['full_committee_formed_semester']);
                $this->programcommitteeapproved = htmlspecialchars($row['program_committee_approved']);
                $this->programcommitteeapprovedsemester = htmlspecialchars($row['program_committee_approved_semester']);
                $this->writtenqualifier = htmlspecialchars($row['written_qualifier']);
                $this->writtenqualifiersemester = htmlspecialchars($row['written_qualifier_semester']);
                $this->proposal = htmlspecialchars($row['proposal']);
                $this->proposalsemester = htmlspecialchars($row['proposal_semester']);
                $this->dissertationdefense = htmlspecialchars($row['dissertation_defense']);
                $this->dissertationdefensesemester = htmlspecialchars($row['dissertation_defense_semester']);
                $this->finaldocument = htmlspecialchars($row['final_document']);
                $this->finaldocumentsemester = htmlspecialchars($row['final_document_semester']);
                $this->notes = htmlspecialchars($row['notes']);
                $this->uid = htmlspecialchars($row['uid']);
                $this->incompliance = htmlspecialchars($row['in_compliance']);
            }
        }
        catch (PDOException $ex)
        {
            $studentslist .= "<p>oops</p>";
            $studentslist .= "<p> Code: {$ex->getCode()} </p>";
            $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
            $studentslist .= "<pre>$ex</pre>";
        }  
    }
}