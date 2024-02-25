<h1 align="center" id="title">Space Explorer</h1>

<p align="center"><img src="SpaceExplorers/IMG/screenshots/home.png?raw=true" alt="project-image"></p>
<p id="description">A proof of concept educational website for learning about space by simulating a space trip booking website

has basic backend functionality such as accounts, database for tickets and admin account and privileges 

this was worked on by 2 other people 

<h2>Project Screenshots:</h2>
<img src="SpaceExplorers/IMG/screenshots/loginasadmin.png?raw=true" alt="project-screenshot" width="" height="">

<img src="SpaceExplorers/IMG/screenshots/Screenshot 2024-01-17 215505.png?raw=true" alt="project-screenshot" width="" height="">

<img src="SpaceExplorers/IMG/screenshots/editcurrentusers.png?raw=true" alt="project-screenshot" width="" height="">

<img src="SpaceExplorers/IMG/screenshots/addatrip.png?raw=true" alt="project-screenshot" width="" height="">



<h2>🛠️ Installation Steps:</h2>

1. As a prerequisite you need to download [XAMPP](https://www.apachefriends.org/), turn both the **apache** and **MySQL** modules on and make sure to remember the installation directory

2. Download the VR videos from this link :

```
https://drive.google.com/drive/folders/1-6mZJYlGT_EBDc2aEN2_Vf1yvorIzBAj?usp=drive_link
```

3. Place the videos in the VID folder in the main directory
   
4. Palce the **SpaceExplorers** folder in the `htdocs` folder within the XAMPP files, the directory is typically

```
C:\xampp\htdocs
```
5. Now open phpmyadmin by going to the link `http://localhost/phpmyadmin/` or clicking MySQL's admin on XAMPP's control panel

6. Go to databases then create a new database with the name `space_explorer_db`

7. Click on the newly added database on the side panel then go to **import** and choose the `DatabaseScript.sql` file from the main dirctory, then click import

8. The website should be working correctly on your machine now, you can start browsing the website by going to `http://localhost/SpaceExplorers/`
