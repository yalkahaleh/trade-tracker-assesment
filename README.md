## TOC
- [Live Demo](#live-demo)
- [Setup & Installation](#setup--installation)
- [Development Details](#development-details)
- [Important Notes](#important-notes)

## Live Demo
To demonstrate the practical application of the project, you can use this link :

[Live Demo](https://assessment.elite-it-team.com)
<br>
Login credentials :
- **Email** : y.alkahaleh@gmail.com
- **Password**:12345678

## Setup & Installation

Follow these steps to set up and run the Laravel project locally:
### 1. Clone the Project

```bash
git clone https://github.com/yalkahaleh/trade-tracker-assesment
```
cd laravel-project

### 2. Create .env File

Create a new `.env` file in the project root.

### 3. Copy .env.example

Copy the contents of `.env.example` and paste them into the newly created `.env` file.

### 4. build the image for the 'app' via docker

```bash
docker-compose up -d --build app
```

### 5. Run composer install via docker

```bash
docker-compose exec app composer install
```

### 6. Run migration via docker

```bash
docker-compose exec app php artisan migrate:fresh --seed
```

### 7. install npm via docker

```bash
docker-compose exec app npm install
```

### 8. build npm via docker

```bash
docker-compose exec app npm run build
```


## Development Details

### 1. Laravel Version
The project utilizes Laravel version 10 and livewire 3.

### 2. Project Structure
the project follows DDD principles, organizing code into domain-specific entities and services.
### Domains
<ul>
<li>The Companies domain includes logic related to company profiles, details, and on-demand fetching of stock data.</li>
<li>The Users domain handles user authentication and management.</li>
</ul>

### Livewire Components
<ul>
<li>
The project leverages Livewire components for dynamic user interfaces, including user registration, login, and company data presentation.
</li>
<li>Notably, the approach for stock data display was shifted to on-demand fetching within Livewire components.</li>
</ul>

### Views Structure

<ul>
<li>The views are structured in a way that supports the DDD approach, with separate directories for each domain.</li>
<li>Tailwind CSS is utilized for styling, ensuring a responsive and modern user interface.</li>
<li>Key view directories include:</li>
<ul>
<li>auth for authentication-related views (login, registration).
</li>
<li>company for displaying company information, stock data and create company.
</li>
</ul>
</ul>

### Frontend Interaction
<ul>
<li>Livewire is used extensively for real-time interactivity without full page reloads.
</li>
<li>The stock data display updates dynamically, reflecting real-time data fetched when a user views a Stock details.</li>
</ul>

## Important Notes

### 1. Login
if you don't want to register
you can use credentials below :
```bash
email : y.alkahaleh@gmail.com
password : 12345678
```

### 2. API Limitation
note that the api for fetching stock is limited by 250 request

<br>
If you have any questions or need assistance, feel free to contact me via email
