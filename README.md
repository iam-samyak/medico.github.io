﻿# Welcome to Medicio!
The platform supports the goal of continuous care for health by providing healthcare facilities that enables them to be securely accessible to their patients, through web services enabling online consultations.

#  A Medicio Pvt Ltd Hospital Management Web App
The Medicio platform has been built by a dedicated team at Medicio Pvt. Ltd. committed to changing the way healthcare is delivered and accessed. Founded in 2011, Medicio Pvt. Ltd. is backed by a team who have been working together for over 18 years building innovative technology solutions in different domains.

## Team
- Samyak Jain (Web Developer : July 2022 - till date),

- Management : MXPERTX InfoLabs (July 2022 - till date)

- Web URL :  [https://iam-samyak.github.io/medico.github.io](https://iam-samyak.github.io/medico.github.io/)

## About this file
The purpose of this file is to provide overview, setup instructions and background information of the project. If you have joined this project as a part of the development team, please ensure this file is up to date.
> **Note : Any update to this project which may affect the running of the code in this git repository must be listed in this file. All developers must ensure that the instructions mentioned in this file are sufficient to enable a new developer to obtain a executable copy of the lastest code in this repository, without involvement from any other human assistance.**

### **Tools and Hardware Requirements Declaration**
I) Software requirements
1.  Windows/Mac/Ubuntu(Any OS)
2.  Visual Studio Code(Any IDE)
3.  JDK
4.  Xampp
5.  Apache Server
6.  MySQL and MySQL drivers
7. Web Browser

II) Hardware requirements

1.  Minimum 8 GB RAM
2.  Minimum 12 GB Available Disk Space
3.  Wifi Availablility

### **Project Technical Specifications**
- This project is based on technologies such as HTML5 , CSS3 , JavaScript , PHP and MySql.
- This project also uses Bootstrap, CSS Frame Work.
- Having responsive frontend, works on all kind of devices and screen.
- This project has Login/Registration page with user authentication, email verification, forget password through email verification.
- This project use PHP and MySql to keep records of users, their details.

### **Setup Instructions**
The below mentioned steps may vary significantly across various operating systems, please follow them accordingly.
These instructions are aimed at a developer who has been added to the project team, after the project development has already been initiated,
Therefore the aim is to get the code from the git repository to run on the developer's system, so as to allow him / her to continue with further development.

#### **Clone the repository from GitHub**
`https://github.com/iam-samyak/medico.github.io.git`
#### **Installing dependencies**
This project requires IDE for running, You can install it by referring to the official Visual Studio Code page :
[https://code.visualstudio.com/download](https://code.visualstudio.com/download/)
Also, require a web-server and local database to store data, 
You can install Xampp: A open source software for web-server and local database:
[https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html/)
To send email for verfication and authentication, you will need a PHP library called PHPMailer, you can install it from:
[https://github.com/PHPMailer/PHPMailer.git](https://github.com/PHPMailer/PHPMailer.git/)

Install the software in your system and create a folder , put all the files in htdocs in xampp folder:

`C:\xampp\htdocs\project_name`

> **Note:** Files of  **PHPMailer** should also be there in project folder.
#### ****Start the Apache and Mysql xampp server :****
> **Note:** If your  **MySql xampp server** does not start, try to uninstall previous version of MySql on your system.

Go to xampp control panel and start Apache and Mysql server. 
Then go to browser and open phpadmin :

`http://localhost/phpmyadmin/index.php`

Create databse, tables, and structure of table.
Update database_name, database_username, database_password, in `config.php` in project_folder. 

> **Note:** In Visual Studio Code install an extension **Live Server** and port it see immediate update of any change made in the code.
 
### **Some Snapshorts of Project**
![Home page of Project](https://raw.githubusercontent.com/iam-samyak/images/main/ss4.JPG?token=GHSAT0AAAAAABW73PM444HRWO5LOU5ZZCYGYXBG4JQ)

![doctor section of project](https://raw.githubusercontent.com/iam-samyak/images/main/ss9.JPG?token=GHSAT0AAAAAABW73PM5PBG23P5ZYBREQFXMYXBG5CA)

You can all snapshorts of this projects from:
[https://drive.google.com/drive/folders/1CbuaEboTW6LV6_zVRpBpa8dBlUOWvoUq?usp=sharing](https://drive.google.com/drive/folders/1CbuaEboTW6LV6_zVRpBpa8dBlUOWvoUq?usp=sharing/)

### **Notes for future maintainers**
All update should saved properly, without any error and should be committed on Github. All queries and issue should be posted on issue section of Github. Try to maintain neat and short comment for future use.All developers must ensure that the instructions mentioned in this file are sufficient to enable a new developer to obtain a executable copy of the lastest code in this repository, without involvement from any other human assistance.
