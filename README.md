
```markdown
# Car Listings Platform
A web application built with Laravel and Tailwind CSS for listing, searching, and selling cars.
The admin(autobroker) can add, edit, preview, and delete listings of cars in their yard. 
Users/poetntail customers can view detailed car information, inquire via WhatsApp, and submit "sell on behalf" orders (Requests for the autobroker to sell a vehicle on their behalf). 
The platform leverages PostgreSQL for the database, providing a seamless experience for car buyers and sellers.
## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Routes](#routes)
- [License](#license)

## Features

- List Cars: Displays a grid of car cards with images, make, model, year, and price. Each card is designed to be visually appealing and informative.

- Search and Filter: Provides a search bar and filter options to find cars by make, model, year, price range, and more.

- Detailed View: Shows multiple images, detailed description, and specifications of a selected car. Contact information is also displayed for inquiries.

- WhatsApp Inquiry: Allows users to start a WhatsApp chat with the seller directly from the car's detailed view page using a pre-configured message template.

- Sell on Behalf: Offers a two-step form for users to submit car details and their contact information. A confirmation message is displayed upon successful submission

## Installation

### Prerequisites

- PHP
- Composer
- Node.js
- Laravel
- PostgreSQL

### Steps

1. **Clone the repository:**

   ```sh
https://github.com/kahuho/autobrookers.git
cd autobrookers
   ```

2. **Install PHP dependencies:**

   ```sh
   composer install
   ```

3. **Install Node.js dependencies:**

   ```sh
   npm install
   ```

4. **Set up environment variables:**

   Copy the `.env.example` file to `.env` and update the necessary settings.

   ```sh
   cp .env.example .env
   ```

5. **Generate application key:**

   ```sh
   php artisan key:generate
   ```

6. **Run database migrations:**

   ```sh
   php artisan migrate
   ```

7. **Seed the database (optional):**

   ```sh
   php artisan db:seed
   ```

8. **Start the development server:**

   ```sh
   php artisan serve
   ```

## Usage

### Access the application

Open your browser and go to `http://localhost:8000`.

## Configuration

### Environment Variables

- **Database Configuration**: Update the database configuration in the `.env` file.

  ```env
  DB_CONNECTION=pgsql
  DB_HOST=127.0.0.1
  DB_PORT=5432
  DB_DATABASE=car_listings
  DB_USERNAME=yourusername
  DB_PASSWORD=yourpassword
  ```

- **WhatsApp API Configuration**: Add your WhatsApp API credentials.

  ```env
  WHATSAPP_API_URL=https://api.whatsapp.com/send
  WHATSAPP_PHONE_NUMBER=yourwhatsappnumber
  ```


### Web Routes

- **Home Page**: `/`
- **Car Details**: `/cars/{car}`
- **Sell on Behalf**: `/sell-on-behalf`
- Admin page: 'http://localhost:8000/admin'




## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
```

