# Library Management Application (CodeIgniter 4)

This project is a Library Management Application built using the **CodeIgniter 4** PHP framework, running entirely within a containerized local development environment using **Docker**.

## Prerequisites

Before setting up the project, make sure you have the following tools installed on your local machine:
* [Docker Desktop](https://www.docker.com/products/docker-desktop/)
* [Visual Studio Code](https://code.visualstudio.com/) (or your preferred code editor)
* [Git](https://git-scm.com/)

---

## Local Setup Instructions

Follow these step-by-step instructions to get the development environment running locally.

### 1. Clone the Repository
Clone the project repository from GitHub to your local machine and navigate into the project directory:
```bash
git clone [https://github.com/sandlerleon/amsb-library-app.git](https://github.com/sandlerleon/amsb-library-app.git)
cd amsb-library-app

### 2. Configure Environment Variables
Duplicate the default configuration file named env and rename the copy to .env:

cp env .env
CI_ENVIRONMENT = development

### 3. Build and Start the Docker Containers
Launch the application components (Apache/PHP web server and MySQL database) in background mode:

docker compose up -d --build

### 4. Install Project Dependencies
Run the official Composer image task to safely fetch and install the application framework dependencies directly into the local workspace directory:

docker run --rm -v ${PWD}:/app -w /app composer install --ignore-platform-reqs

### 6. Activate Core System Extensions
Install and initialize the missing internationalization engine and database extensions within the Linux server workspace, then perform a quick container reboot:

docker compose exec web sh -c "apt-get update && apt-get install -y libicu-dev && docker-php-ext-configure intl && docker-php-ext-install intl mysqli"
docker compose restart web




## Database Initialization (Migrations & Seeders)
To set up your database layout and populate it with initial library catalog entries, execute the following commands in sequence:

### 1. Run Database Migrations
Create the core schema tables (e.g., the books structure) inside the MySQL server container:

docker compose exec web php spark migrate

### 2. Populate Sample Data (Seeder)
Initialize the book log catalog by filling the data grid rows with 5 default classic literature titles:

docker compose exec web php spark db:seed BookSeeder

### Database Configuration Settings
The running containers feature a built-in preconfigured standalone MySQL instance using the following default local access variables:

Host: db (Internal network alias)

Database Name: library_db

Username: root

Password: root_password

Port Mapping: 3306

### Accessing the Application
Once all configuration steps are complete, you can open your web browser and view the application dashboard at the following local host URL destination:

Web Application Interface: http://localhost:8080