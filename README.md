# File Duplicate Removal System

## Overview
The **File Duplicate Removal System** is a PHP and SQL-based application designed to detect and remove duplicate files from a database or file storage system. This tool helps optimize storage space and maintain data integrity by identifying redundant files based on their content, name, or hash value.

## Features
- Scans and detects duplicate files stored in the database or server directories.
- Compares files using hash-based verification (MD5, SHA1, etc.).
- Provides an interface to review and confirm deletions before removal.
- Logs all duplicate removal actions for auditing purposes.
- Optimized for performance with efficient SQL queries and PHP file-handling techniques.

## Installation
### Prerequisites
Ensure you have the following installed on your server:
- PHP (>=7.4 recommended)
- MySQL or MariaDB
- Apache/Nginx server
- Composer (optional for dependency management)

### Steps
1. **Clone the repository:**
   ```sh
   git clone https://github.com/your-repo/file-duplicate-removal.git
   cd file-duplicate-removal
   ```

2. **Configure the database:**
   - Import the provided `database.sql` file into your MySQL database.
   - Update the `config.php` file with your database credentials:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'peace');
     ```

3. **Run the system:**
   - If using Apache, place the project in the `htdocs` folder and access it via `http://localhost/file-duplicate-removal`
   - If using a PHP built-in server, run:
     ```sh
     php -S localhost:8000
     ```

## Usage
1. Upload or scan files stored in the system.
2. Run the duplicate detection algorithm.
3. Review detected duplicates in the interface.
4. Select duplicates to delete or keep.
5. Confirm and execute the cleanup process.

## Technologies Used
- **Backend:** PHP, MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Hashing Algorithm:** MD5/SHA1 for file comparison
- **Logging:** File-based or database logging for tracking actions

## Security Considerations
- Always back up your database before running the removal process.
- Restrict access to the deletion tool to authorized users.
- Use prepared statements to prevent SQL injection.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact
For questions or contributions, reach out to [your-email@example.com] or open an issue on the repository.

---
Developed by **[Your Name]**
