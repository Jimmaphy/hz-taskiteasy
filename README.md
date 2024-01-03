# TaskITEasy

TaskITEasy is a project made during the Framework Development course of HZ University of Applied Sciences.
Some basic idea's on the implementation of the applications where given,
everything else is up to the student to implement how they see fit.

## Running the Application

In order to run the application one needs NodeJS, PHP, Composer and MySQL.
When these packages are installed, the following command can be followed to setup the project:

```bash
# Windows PowerShell
git clone https://github.com/Jimmaphy/hz-taskiteasy.git
cd .\hz-taskiteasy\taskiteasy\
composer install
npm install
cp .\.env.example .env
```

```bash
# Bash & Zsh
git clone https://github.com/Jimmaphy/hz-taskiteasy.git
cd ./hz-taskiteasy/taskiteasy/
composer install
npm install
cp ./.env.example .env
```

When the project is setup,
the application needs to be configured by changing the properties inside the newly created ```.env``` file.
When this is done, the application can be ran using:

```bash
# Any command line
npm run dev
php artisan serve
```
