<h1 align="center" id="title">space_explorers (back_end version)</h1>

<p align="center"><img src="https://github.com/mernaatef28/space-explorers-/blob/main/IMG/screenshots/home.png?raw=true" alt="project-image"></p>
<p id="description">I coded the back end to this website using php : <br>1) Website database file<br> 2)  Admin interface <br> 3) admin controlpanel <br> 4) Login user interface’s backend</p>

<h2>Project Screenshots:</h2>
<img src="https://github.com/mernaatef28/space-explorers-/blob/main/IMG/screenshots/loginasadmin.png?raw=true" alt="project-screenshot" width="" height="">

<img src="https://github.com/mernaatef28/space-explorers-/blob/main/IMG/screenshots/Screenshot%202024-01-17%20215505.png?raw=true" alt="project-screenshot" width="" height="">

<img src="https://github.com/mernaatef28/space-explorers-/blob/main/IMG/screenshots/editcurrentusers.png?raw=true" alt="project-screenshot" width="" height="">

<img src="https://github.com/mernaatef28/space-explorers-/blob/main/IMG/screenshots/addatrip.png?raw=true" alt="project-screenshot" width="" height="">



<h2>🛠️ Installation Steps:</h2>

1. As a prerequisite you need to download [XAMPP](https://www.apachefriends.org/), turn both the **apache** and **MySQL** modules on and make sure to remeber the installation directory

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

8. The website should be working correctly on your machine new, you can start browsing the website by going to `http://localhost/SpaceExplorers/`
