# To-Do App with PHP

## Description
This project is a simple yet functional To-Do application built with PHP and MySQL. It allows users to add, view, update, and delete tasks efficiently. The app's interface is built using Bootstrap for a responsive and clean design, while the back-end leverages PHP for server-side processing and MySQL for data management.

## Features
- **Add Tasks:** Users can easily add new tasks to their to-do list.
- **View Tasks:** The app displays the list of tasks in a well-organized table format.
- **Update Tasks:** Users can update the details of any task.
- **Delete Tasks:** Tasks can be deleted individually, with a confirmation message upon successful deletion.
- **Responsive Design:** The app is fully responsive and works well on various screen sizes.

## Technology Stack
- **Front-End:** HTML5, Bootstrap 5, Font Awesome.
- **Back-End:** PHP 8, MySQL.
- **Database:** MySQL, with a simple table structure to store tasks.

## How It Works
1. **Adding Tasks:** Users can enter a task title and submit the form to add a task. The task is then stored in the MySQL database.
2. **Viewing Tasks:** Tasks are retrieved from the database and displayed in a table, with options to edit or delete each task.
3. **Updating Tasks:** Users can update existing tasks by clicking the edit button, which leads to a form pre-filled with the task details.
4. **Deleting Tasks:** When the delete button is clicked, the task's ID is sent to a PHP script that handles the deletion from the database.

## Project Structure
- **index.php:** The main file that handles the display of tasks and the form for adding new tasks.
- **Controller/StoreTask.php:** Handles storing new tasks into the database.
- **Controller/DeleteTask.php:** Manages the deletion of tasks and the reordering of task IDs.
- **Assets:** Contains static files like images and custom JavaScript.

## Installation
1. Clone the repository.
2. Import the `TO_DO` database from the provided SQL file.
3. Update the database connection settings in the PHP files if necessary.
4. Run the app locally on a PHP server.

## License
This project is open-source and available under the MIT License.
