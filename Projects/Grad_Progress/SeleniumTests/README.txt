Joshua Callahan
H9 - Selenium
April 7th, 2016
               ,
         (`.  : \               __..----..__
          `.`.| |:          _,-':::''' '  `:`-._
            `.:\||       _,':::::'         `::::`-.
              \\`|    _,':::::::'     `:.     `':::`.
               ;` `-''  `::::::.                  `::\
            ,-'      .::'  `:::::.         `::..    `:\
          ,' /_) -.            `::.           `:.     |
        ,'.:     `    `:.        `:.     .::.          \
   __,-'   ___,..-''-.  `:.        `.   /::::.         |
  |):'_,--'           `.    `::..       |::::::.      ::\
   `-'   Hello there   |`--.:_::::|_____\::::::::.__  ::|
                       |   _/|::::|      \::::::|::/\  :|
                       /:./  |:::/        \__:::):/  \  :\
                     ,'::'  /:::|        ,'::::/_/    `. ``-.__
                    ''''   (//|/\      ,';':,-'         `-.__  `'--..__
                                                             `''---::::'
 Languages:  I decided to write my Selenium Tests in Java after experiencing some trouble
 with Visual Studio.  I used the Java JUnit 4 WebDriver.
 
 Setup: The SeleniumTests.java src code is included.  To make it run properly, you will need
 to include the correct .jar files that I have included.  In Eclipse this can be done by
 right clicking the project in Package Explorer then Properties-> Java Build Path-> Libraries 
 -> Add External JARS. Browse to the .jar files and include all.
 
 Testing Description:  I wrote 3 major tests using the Selenium IDE plugin for Firefox.  
 - First, I tested the ablity to navigate to the Grad Progress project, log in, and see the 
 correct information.  User Jonny is logged in and an assert statement checks to make sure
 his name is visible at the top.
 
 - Second, I tested the AJAX capabilites for the DGS.  The DGS is logged in, and and buttons
 are pressed to make the student metrics graphs appear.  The test ensures these graphs appear.
 
  - Third, I tested the ability to create a new form and view the correct information in that form.
 
 I included as many of my webpages as possible in all of these tests.  I tested all of the basic
 functionality that would be required of a user and dgs.  This testing strategy could be built
 to scale later because every web page is accessed.  I would only need add more assert statements
 to check for correct information on more tags.
 
