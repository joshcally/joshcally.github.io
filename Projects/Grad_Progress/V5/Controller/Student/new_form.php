<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../" );
require_once "Model/Student/student.php";
require_once "Controller/authentication.php";
session_start();
verifyLogin("");
$_uid = $_GET['id'];
$user = new User( $_uid );
try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    if (isset ($_GET['certifyValidity']))
    {
        $identifyadvisor = isset($_GET['identifyAdvisor']) ? 1 : 0;
        $identifyadvisorsemester = $_GET['identifyAdvisorSemester'];    
        $programadvisorapproved = isset($_GET['programAdvisorApproved']) ? 1 : 0;
        $programadvisorapprovedsemester = $_GET['programAdvisorApprovedSemester'];
        $teachingmentorship = isset($_GET['teachingMentorship']) ? 1 : 0;
        $teachingmentorshipsemester = $_GET['teachingMentorshipSemester'];
        $requiredclasses = isset($_GET['requiredClasses']) ? 1 : 0;
        $requiredclassessemester = $_GET['requiredClassesSemester'];
        $fullcommitteeformed = isset($_GET['fullCommitteeFormed']) ? 1 : 0;
        $fullcommitteeformedSemester = $_GET['fullCommitteeFormedSemester'];
        $programcommitteeapproved = isset($_GET['programCommitteeApproved']) ? 1 : 0;
        $programcommitteeapprovedSemester = $_GET['programCommitteeApprovedSemester'];
        $writtenqualifier = isset($_GET['writtenQualifier']) ? 1 : 0;
        $writtenqualifierSemester = $_GET['writtenQualifierSemester'];
        $proposal = isset($_GET['proposal']) ? 1 : 0;
        $proposalsemester = $_GET['proposalSemester'];
        $dissertationdefense = isset($_GET['dissertationDefense']) ? 1 : 0;
        $dissertationdefenseSemester = $_GET['dissertationDefenseSemester'];
        $finaldocument = isset($_GET['finalDocument']) ? 1 : 0;
        $finaldocumentsemester = $_GET['finalDocumentSemester'];
        $notes = $_GET['notes'];
        $uid = $_GET['id'];
        
        $present = date("Y-m-d H:i:s");
        
        $query = "INSERT INTO `Grad_Prog_V5`.`form_data` (`time_completed`, `uid`, `identify_advisor`, 
        `identify_advisor_semester`, `program_advisor_approved`, `program_advisor_approved_semester`, 
        `teaching_mentorship`, `teaching_mentorship_semester`, `required_classes`, `required_classes_semester`, 
        `full_committee_formed`, `full_committee_formed_semester`, `program_committee_approved`, 
        `program_committee_approved_semester`, `written_qualifier`, `written_qualifier_semester`, `proposal`, 
        `proposal_semester`, `dissertation_defense`, `dissertation_defense_semester`, `final_document`, 
        `final_document_semester`, `notes`, `in_compliance`) 
        VALUES ('" . $present . "', '" . $uid . "', '" . $identifyadvisor . "', '" . $identifyadvisorsemester . "', '" . $programadvisorapproved . "',
         '" . $programadvisorapprovedsemester . "', '" . $teachingmentorship ."', '" . $teachingmentorshipsemester . "',
          '" . $requiredclasses . "', '" . $requiredclassessemester . "', '" . $fullcommitteeformed . "', 
          '" . $fullcommitteeformedSemester . "', '" . $programcommitteeapproved . "', '" . $programcommitteeapprovedSemester . "',
           '" . $writtenqualifier . "', '" . $writtenqualifierSemester . "', '" . $proposal . "', '" . $proposalsemester . "',
            '" . $dissertationdefense . "', '" . $dissertationdefenseSemester . "', '" . $finaldocument . "', '"
            . $finaldocumentsemester . "', '" . $notes . "', '0');";

    
        $statement = $db->prepare($query);
        $statement->execute();
        
        $progressform = "
            <div id='form'>
                <p>
                Thank you! Your form has been submitted for review.<br>
                <a href='./student_forms.php?id=" . $user->uid . "'>Return to My Profile</a>
                </p>
            </div>";
    }
    else
    {   
       $progressform = "<div id='form'>
            <form method='get'>
                <p>
                Student Name: " . $user->firstname . " " . $user->lastname . " <br>
                Student ID: " . $user->uid . "<br>
                Degree: Computer Science <br>
                Track: Machine Learning <br>
                        Semester Admitted: 
                        <select name='semesterAdmitted'>
                            <option value='fall13'>Fall 2013</option>
                            <option value='spring14'>Spring 2014</option>
                            <option value='fall14'>Fall 2014</option>
                            <option value='spring15'>Spring 2015</option>
                            <option value='fall15'>Fall 2015</option>
                            <option value='spring16'>Spring 2016</option>
                        </select> Number of semesters in the program: <input type='text' name='numSemesters' value=''><br>
                        Advisor: <input type='text' name='advisor' value=''><br>
                        Committee: <input type='text' name='committeeMember1' value=''>
                        <input type='text' name='committeeMember2' value=''>
                        <input type='text' name='committeeMember3' value=''>
                        <input type='text' name='committeeMember4' value=''><br>
                        Progress Checklist:
                        <table id='checklist'>
                        <tr id='tableheader'>
                            <td>Completed?</td>
                            <td>Expected Completion</td>
                            <td>Event</td>
                            <td>Good Progress</td> 
                            <td>Acceptable Progress</td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name='identifyAdvisor' value='identifyAdvisor'></td>
                            <td><select name='identifyAdvisorSemester'>
                                <option value='Fall 2016'>Fall 2016</option>
                                <option value='Spring 2017'>Spring 2017</option>
                                <option value='Fall 2017'>Fall 2017</option>
                                <option value='Spring 2018'>Spring 2018</option>
                                <option value='Fall 2018'>Fall 2018</option>
                                <option value='Spring 2019'>Spring 2019</option>
                            </select></td>
                            <td>Identify Advisor</td> 
                            <td>1 Semester</td>
                            <td>2 Semesters</td>
                        </tr>
                        <tr>
                        <td><input type='checkbox' name='programAdvisorApproved' value='programAdvisorApproved'></td>
                            <td><select name='programAdvisorApprovedSemester'>
                            <option value='Fall 2016'>Fall 2016</option>
                            <option value='Spring 2017'>Spring 2017</option>
                            <option value='Fall 2017'>Fall 2017</option>
                            <option value='Spring 2018'>Spring 2018</option>
                            <option value='Fall 2018'>Fall 2018</option>
                            <option value='Spring 2019'>Spring 2019</option>
                        </select></td>
                        <td>Program of study approved by advisor and initial committee</td> 
                        <td>4 Semesters</td>
                        <td>5 Semesters</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' name='teachingMentorship' value='teachingMentorship'></td>
                        <td><select name='teachingMentorshipSemester'>
                            <option value='Fall 2016'>Fall 2016</option>
                            <option value='Spring 2017'>Spring 2017</option>
                            <option value='Fall 2017'>Fall 2017</option>
                            <option value='Spring 2018'>Spring 2018</option>
                            <option value='Fall 2018'>Fall 2018</option>
                            <option value='Spring 2019'>Spring 2019</option>
                        </select></td>
                        <td>Complete teaching mentorship</td> 
                        <td>4 Semesters</td>
                        <td>6 Semesters</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' name='requiredClasses' value='requiredClasses'></td>
                        <td><select name='requiredClassesSemester'>
                            <option value='Fall 2016'>Fall 2016</option>
                            <option value='Spring 2017'>Spring 2017</option>
                            <option value='Fall 2017'>Fall 2017</option>
                            <option value='Spring 2018'>Spring 2018</option>
                            <option value='Fall 2018'>Fall 2018</option>
                            <option value='Spring 2019'>Spring 2019</option>
                        </select></td>
                        <td>Complete Required Courses</td> 
                        <td>5 Semesters</td>
                        <td>6 Semesters</td>
                    </tr>
                    <tr>
                        <td><input type='checkbox' name='fullCommitteeFormed' value='fullCommitteeFormed'></td>
                        <td><select name='fullCommitteeFormedSemester'>
                            <option value='Fall 2016'>Fall 2016</option>
                            <option value='Spring 2017'>Spring 2017</option>
                            <option value='Fall 2017'>Fall 2017</option>
                            <option value='Spring 2018'>Spring 2018</option>
                            <option value='Fall 2018'>Fall 2018</option>
                            <option value='Spring 2019'>Spring 2019</option>
                        </select></td>
                        <td>Full Committee Formed</td> 
                        <td>6 Semesters</td>
                        <td>7 Semesters</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='programCommitteeApproved' value='programCommitteeApproved'></td>
                    <td><select name='programCommitteeApprovedSemester'>
                        <option value='Fall 2016'>Fall 2016</option>
                        <option value='Spring 2017'>Spring 2017</option>
                        <option value='Fall 2017'>Fall 2017</option>
                        <option value='Spring 2018'>Spring 2018</option>
                        <option value='Fall 2018'>Fall 2018</option>
                        <option value='Spring 2019'>Spring 2019</option>
                    </select></td>
                    <td>Program of study approved by committee</td> 
                    <td>6 Semesters</td>
                    <td>7 Semesters</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='writtenQualifier' value='writtenQualifier'></td>
                    <td><select name='writtenQualifierSemester'>
                        <option value='Fall 2016'>Fall 2016</option>
                        <option value='Spring 2017'>Spring 2017</option>
                        <option value='Fall 2017'>Fall 2017</option>
                        <option value='Spring 2018'>Spring 2018</option>
                        <option value='Fall 2018'>Fall 2018</option>
                        <option value='Spring 2019'>Spring 2019</option>
                    </select></td>
                    <td>Written qualifier</td> 
                    <td>5 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='proposal' value='proposal'></td>
                    <td><select name='proposalSemester'>
                        <option value='Fall 2016'>Fall 2016</option>
                        <option value='Spring 2017'>Spring 2017</option>
                        <option value='Fall 2017'>Fall 2017</option>
                        <option value='Spring 2018'>Spring 2018</option>
                        <option value='Fall 2018'>Fall 2018</option>
                        <option value='Spring 2019'>Spring 2019</option>
                    </select></td>
                    <td>Oral qualifier/Proposal</td> 
                    <td>7 Semesters</td>
                    <td>8 Semesters</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='dissertationDefense' value='dissertationDefense'></td>
                    <td><select name='dissertationDefenseSemester'>
                        <option value='Fall 2016'>Fall 2016</option>
                        <option value='Spring 2017'>Spring 2017</option>
                        <option value='Fall 2017'>Fall 2017</option>
                        <option value='Spring 2018'>Spring 2018</option>
                        <option value='Fall 2018'>Fall 2018</option>
                        <option value='Spring 2019'>Spring 2019</option>
                    </select></td>
                    <td>Dissertation defense</td> 
                    <td>10 Semesters</td>
                    <td>12 Semesters</td>
                </tr>
                <tr>
                    <td><input type='checkbox' name='finalDocument' value='finalDocument'></td>
                    <td><select name='finalDocumentSemester'>
                        <option value='Fall 2016'>Fall 2016</option>
                        <option value='Spring 2017'>Spring 2017</option>
                        <option value='Fall 2017'>Fall 2017</option>
                        <option value='Spring 2018'>Spring 2018</option>
                        <option value='Fall 2018'>Fall 2018</option>
                        <option value='Spring 2019'>Spring 2019</option>
                    </select></td>
                    <td>Final document</td> 
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table><br>
            (Optional) Additional notes for your advisor:<br>
            <textarea name='notes' type='text' cols='40' rows='8'></textarea><br>
            <input type='checkbox' name='certifyValidity' required value='certifyValidity'> I certify the above information is correct. <br>
            <input id='submit' type='submit' value='Submit'>
            <input type='hidden' name='id' value='$user->uid'>
        </form>";
    }
}
catch (PDOException $ex)
{
    $studentslist .= "<p>oops</p>";
    $studentslist .= "<p> Code: {$ex->getCode()} </p>";
    $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
    $studentslist .= "<pre>$ex</pre>";
}     
require_once "View/Student/new_form_view.php";  
?>