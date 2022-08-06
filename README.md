# Covid-Database-Application

A course project for CISC 332 Database Management Systems in Winter 2022 at Queen's University.

It aimed to establish a fully functioning web-based interface for the covid vaccination database. The database was created by running covidDB.sql or covidDB.txt script in a MySQL server. The application was written by PHP, which was used to generate the dynamic content (ie. accessing the back end database and displaying the results) and work with (almost) any DBMS. It used PHP Data Objects (PDO), not the mysqli api.

One can try to convert the following Entity Relation (ER) Diagram to get the database that was used in this project. [CovidVaccine.pdf](https://github.com/NuoyanYang/Covid-Database-Application/files/9274157/CovidVaccine.pdf).

## Prerequisites
This is an example of how to run the code in local. One need to download XAMPP (XAMPP helps a local host or server to test its website and clients via computers and laptops before releasing it to the main server). Start XAMPP and start the Apache and the MySQL services.

![1659746722194](https://user-images.githubusercontent.com/71059629/183226841-5b694d94-1b1e-42a4-86e8-a082ebfb7655.png)

## How to Use
The main page is "covid.db". After the environment is settled, one may enter the web address to open this application. The web address is "http://localhost/covid.php" in my case. When one open the address, one would see the title is "*Welcome To The Covid Vaccination Web*". Then, one may navigate to other websites for the functionalities they want. 

## Functionality 
* Record a vaccination for a patient. The web would ask the person's OHIP number first. If the patient doesn't exist in the database, thw web would prompt for the patient information and add the patient first before asking for vaccination data.
    * Once the patient is in the database, ask for the vaccination data: which clinic the vaccine was administered at (list them and let the user choose), the lot           number of the vaccine that they were given.
    * Record the vaccination.
    * List all vaccinations for this patient after updating the vaccination table.
* Allow the user to choose a vaccine type and display all the vaccination sites that have (or will) offer that type of vaccine along with the total number of doses that have shipped to that site.
* Allow the user to choose a patient (from the list of patients in the database) and show their vaccination status, i.e. the patient's name, ohip number, the date the vaccine was given and the type of vaccine that was given.
* Show a list of all workers that work at a vaccination site (chosen by the user). Show their name and whether they are a doctor or a nurse.
* Show a list of doctors' credential.
* Show a list of nurses' credential.
* Show a list of vaccination sites with address.
* Show a list of vaccine companies with address.

## Acknowlegements
CISC 332 Assignments

