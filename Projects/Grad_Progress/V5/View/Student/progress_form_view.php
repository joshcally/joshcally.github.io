<?php
/** 
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 * V2
 */

echo "<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel='stylesheet' type='text/css' href='../../Style/grad_progress.css'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Previous student form'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>    
        <div id='header'>         
            <a href='./student_forms.php?id=$user->uid'>My Profile</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
            <a href='../logout.php'>Sign Out</a>
        </div>

        <div id='title'>
            <h1>Past Progress Form</h1>
        </div>
            
        <div id='section'>
            <p>Date: $form->timecompleted<br>
            Student Name: $user->firstname $user->lastname<br>
            Student ID: $form->uid<br>
            Degree: Computer Science<br>
            Track: Machine Learning<br>
            Semester Admitted: Fall 2014<br>
            Number of semesters in the program: 3<br>
            Advisor: Jim De St Germain<br>
            Committee: Joe Zachary, Mariah Myers, David Johnson<br>
            Progress Checklist:
            <table id='checklist'>
                <tr>
                    <td>Completed</td>
                    <td>Expected Completion</td>
                    <td>Event</td>
                    <td>Good Progress</td> 
                    <td>Acceptable Progress</td>
                </tr>
                <tr>
                    <td>$form->identifyadvisor</td>
                    <td>$form->identifyadvisorsemester</td>
                    <td>Identify Advisor</td> 
                    <td>1 Semester</td>
                    <td>2 Semesters</td>
                </tr>
                    <tr>
                    <td>$form->programadvisorapproved</td>
                    <td>$form->programadvisorapprovedsemester</td>
                    <td>Program of study approved by advisor and initial committee</td> 
                    <td>4 Semesters</td>
                    <td>5 Semesters</td>
                </tr>
                    <tr>
                    <td>$form->teachingmentorship</td>
                    <td>$form->teachingmentorshipsemester</td>
                    <td>Complete teaching mentorship</td> 
                    <td>4 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>$form->requiredclasses</td>
                    <td>$form->requiredclassessemester</td>
                    <td>Complete Required Courses</td> 
                    <td>5 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>$form->fullcommitteeformed</td>
                    <td>$form->fullcommitteeformedsemester</td>
                    <td>Full Committee Formed</td> 
                    <td>6 Semesters</td>
                    <td>7 Semesters</td>
                </tr>
                <tr>
                    <td>$form->programcommitteeapproved</td>
                    <td>$form->programcommitteeapprovedsemester</td>
                    <td>Program of study approved by committee</td> 
                    <td>6 Semesters</td>
                    <td>7 Semesters</td>
                </tr>
                <tr>
                    <td>$form->writtenqualifier</td>
                    <td>$form->writtenqualifiersemester</td>
                    <td>Written qualifier</td> 
                    <td>5 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>$form->proposal</td>
                    <td>$form->proposalsemester</td>
                    <td>Oral qualifier/Proposal</td> 
                    <td>7 Semesters</td>
                    <td>8 Semesters</td>
                </tr>
                <tr>
                    <td>$form->dissertationdefense</td>
                    <td>$form->dissertationdefensesemester</td>
                    <td>Dissertation defense</td> 
                    <td>10 Semesters</td>
                    <td>12 Semesters</td>
                </tr>
                <tr>
                    <td>$form->finaldocument</td>
                   <td>$form->finaldocumentsemester</td>
                    <td>Final document</td> 
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table><br>
            Additional Notes: $form->notes  
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";