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
            $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V4;charset=utf8", "root", "200337226");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            $query = "SELECT * from Grad_Prog_V4.form_data where form_id = " . $id;
            $statement = $db->prepare($query);
            $statement->execute();   
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                
                $this->formid = $id;
                $this->timecompleted = $row['time_completed'];
                $this->identifyadvisor = $row['identify_advisor'];
                $this->identifyadvisorsemester = $row['identify_advisor_semester'];   
                $this->programadvisorapproved = $row['program_advisor_approved'];
                $this->programadvisorapprovedsemester = $row['program_advisor_approved_semester'];
                $this->teachingmentorship = $row['teaching_mentorship'];
                $this->teachingmentorshipsemester = $row['teaching_mentorship_semester'];
                $this->requiredclasses = $row['required_classes'];
                $this->requiredclassessemester = $row['required_classes_semester'];
                $this->fullcommitteeformed = $row['full_committee_formed'];
                $this->fullcommitteeformedsemester = $row['full_committee_formed_semester'];
                $this->programcommitteeapproved = $row['program_committee_approved'];
                $this->programcommitteeapprovedsemester = $row['program_committee_approved_semester'];
                $this->writtenqualifier = $row['written_qualifier'];
                $this->writtenqualifiersemester = $row['written_qualifier_semester'];
                $this->proposal = $row['proposal'];
                $this->proposalsemester = $row['proposal_semester'];
                $this->dissertationdefense = $row['dissertation_defense'];
                $this->dissertationdefensesemester = $row['dissertation_defense_semester'];
                $this->finaldocument = $row['final_document'];
                $this->finaldocumentsemester = $row['final_document_semester'];
                $this->notes = $row['notes'];
                $this->uid = $row['uid'];
                $this->incompliance = $row['in_compliance'];
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