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
            <a href='../../Controller/Student/student_forms.php'>Student Profile</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
            <a href='../../Controller/Advisor/students.php'>Students</a>
        </div>

        <div id='title'>
            <h1>Past Progress Form</h1>
        </div>
            
        <div id='section'>
            <p>Date: $form->date<br>
            Student Name: $student->name<br>
            Student ID: 00134253<br>
            Degree: Computer Science<br>
            Track: Machine Learning<br>
            Semester Admitted: Fall 2014<br>
            Number of semesters in the program: 3<br>
            Advisor: Russell Westbrook<br>
            Committee: Jeff Hornacek, Jerry Sloan<br>
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
                    <td>Yes</td>
                    <td>Fall 2014</td>
                    <td>Identify Advisor</td> 
                    <td>1 Semester</td>
                    <td>2 Semesters</td>
                </tr>
                    <tr>
                    <td>Yes</td>
                    <td>Fall 2015</td>
                    <td>Program of study approved by advisor and initial committee</td> 
                    <td>4 Semesters</td>
                    <td>5 Semesters</td>
                </tr>
                    <tr>
                    <td>No</td>
                    <td>Spring 2016</td>
                    <td>Complete teaching mentorship</td> 
                    <td>4 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Spring 2017</td>
                    <td>Complete Required Courses</td> 
                    <td>5 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Spring 2017</td>
                    <td>Full Committee Formed</td> 
                    <td>6 Semesters</td>
                    <td>7 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Spring 2017</td>
                    <td>Program of study approved by committee</td> 
                    <td>6 Semesters</td>
                    <td>7 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Fall 2016</td>
                    <td>Written qualifier</td> 
                    <td>5 Semesters</td>
                    <td>6 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Fall 2017</td>
                    <td>Oral qualifier/Proposal</td> 
                    <td>7 Semesters</td>
                    <td>8 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Spring 2018</td>
                    <td>Dissertation defense</td> 
                    <td>10 Semesters</td>
                    <td>12 Semesters</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Spring 2018</td>
                    <td>Final document</td> 
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table><br>
            Additional Notes: Kevin is an outstanding student making great progress in his degree program.  
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";