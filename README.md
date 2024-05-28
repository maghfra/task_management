Task Management Application
This application is designed to facilitate task management within an organization. It provides functionalities for administrators to create tasks and assign them to non-admin users, while also offering insights into task distribution through user statistics.

Features
Task Creation Page: Administrators can create tasks by providing details such as title, description, and the user to whom the task is assigned.
Task List Page: Users can view a paginated list of tasks, including their titles, descriptions, and the names of the users to whom they are assigned and by whom they were assigned.
Statistics Page: This page displays statistics on the number of tasks assigned to each user, highlighting the top 10 users with the highest task counts.
Usage
Task Creation Page: Users can access the task creation page to input task details and assign tasks to specific users.
Task List Page: Users can view their assigned tasks and track their progress.
Statistics Page: Administrators can analyze task distribution and identify users with the highest task loads.
Database
The application utilizes a database to store user information, task details, and statistics on task distribution. The database schema is created using the artisan command, and seeders are provided to generate sample data for testing and demonstration purposes.

Testing
Comprehensive tests are included to ensure the reliability and functionality of the application. Test cases cover various scenarios related to task creation, assignment, viewing, and statistical analysis.

Getting Started
To run the application, execute the app:start command, which will start the server and make the application accessible via a web browse