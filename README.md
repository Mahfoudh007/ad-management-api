# Project: Advertisement Management API

## Project Description
This project is an **Advertisement Management API** that allows you to **Create**, **Read**, **Update**, and **Delete** advertisements. The API is built using **PHP** and **MySQL** and is designed for managing ad listings with essential features.

## Project Features
- **Create New Advertisement**: Add a new ad to the database.
- **Read Advertisements**: Fetch all active ads within a specified date range.
- **Update Advertisement**: Modify an existing ad's data.
- **Delete Advertisement**: Remove an ad from the database.

## Main Files
- `src/create.php`: Add a new ad (POST).
- `src/read.php`: Retrieve active ads (GET).
- `src/update.php`: Update ad data (PUT).
- `src/delete.php`: Delete an ad (DELETE).

## Requirements
- **PHP** (version 7.4 or higher)
- **MySQL** (version 5.7 or higher)
- **Postman** or a similar tool for API testing

## Database Setup
1. Create a new database.
2. Create an `ads` table with the following structure:

   ```sql
   CREATE TABLE ads (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       content TEXT,
       image_url VARCHAR(255),
       start_date DATE,
       end_date DATE,
       status ENUM('active', 'inactive') DEFAULT 'active'
   );

3.Configure the database connection in config/db.php with your database credentials.


## Usage
You can test the API endpoints using Postman or similar tools. Each endpoint accepts requests in JSON format with the following structure:

## Example JSON Structure for Requests

{
    "id": 1,
    "title": "Updated Ad Title",
    "content": "This is the updated content for the ad",
    "image_url": "https://example.com/image.jpg",
    "start_date": "2024-11-15",
    "end_date": "2024-12-15",
    "status": "active"
}

## API Endpoints
- Create: src/create.php (Method: POST)
- Read: src/read.php (Method: GET)
- Update: src/update.php (Method: PUT)
- Delete: src/delete.php (Method: DELETE)

  
## Response Example
In case of a successful update, the API returns a response in JSON format:
{
    "message": "Ad updated successfully"
}
