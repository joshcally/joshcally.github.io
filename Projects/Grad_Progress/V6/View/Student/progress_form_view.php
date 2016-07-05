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
        <link rel='stylesheet' type='text/css' href='../../Style/sticky_footer_navbar.css'>
        <link href='../../dist/css/bootstrap.css' rel='stylesheet'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Previous student form'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>  
    
                     <!-- Fixed navbar -->
    <nav class='navbar navbar-default navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
        </div>
        <div id='navbar' class='collapse navbar-collapse'>
          <ul class='nav navbar-nav'>
            <li><a href='./student_forms.php?id=$user->uid'>My Profile</a></li>
            <li><a href='http://www.utah.edu'>University of Utah</a></li>
            <li><a href='http://www.cs.utah.edu'>School of Computing</a></li>
             <li><a href='../logout.php'>Sign Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  

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
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='../../dist/js/bootstrap.min.js'></script>
</html>";