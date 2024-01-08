James Cook University Website Development README
Group 3 SP53 CP3402 CMS

===

### Overview

This document provides all the necessary information for a developer to continue developing and deploying the James Cook University website. The website is a custom WordPress theme designed to provide an engaging and informative experience for prospective students, staff, and the academic community.

### Project Structure
The project is structured as a custom WordPress theme built from the _s [(Underscores)](https://underscores.me/) starter theme. 
The development files are uploaded in [this repository](https://github.com/Huang-Yuanhang/Slack), containing the theme, plugins, and media used in the site's construction.

### Local Development Environment
The website was developed using XAMPP v3.3.0 as the local server environment with WordPress 6.4.2 installed on it.

Installation
---------------

### Prerequisites:

* XAMPP v3.3.0 or above
* WordPress 6.4.2
* Visual Studio Code (or any preferred IDE)


### Setup:

* Extract the ZIP archive to the htdocs directory in your XAMPP installation.
* Configure XAMPP to run the MySQL database and Apache server.
* Access the WordPress installation through https://localhost/wordpress-6.4.2/wordpress/ and complete the setup.
* Activate the custom theme from the WordPress admin dashboard under Appearance > Themes.

### Theme Details

* Name: JCU Custom Theme
* Base: _s (Underscores)
* Main Technologies: PHP, JavaScript, HTML5, CSS3, MySQL
* Custom Theme Files:
* style.css: The main stylesheet.
* functions.php: Theme functions and WordPress hooks.
* header.php: The header template.
* footer.php: The footer template.
* index.php: The main template file.
* page.php: Template for individual pages.
* single.php: Template for single posts.
* archive.php: Archive template.
* Additional custom templates and partials are included within the theme directory.

### Workflow for Development

1. Pull Latest Code: If working in a team, ensure you have the latest version of the code from your version control system.
2. Develop Locally: Make changes locally within your XAMPP environment.
3. Test Changes: Thoroughly test your changes in the local environment.
4. Commit: Once tested, commit your changes with a clear commit message.
5. Push: Push your commits to the remote repository.

### Deployment

Deployment to the live server should be done in accordance with the established deployment procedures, which may involve:

* Manual file transfer via FTP/SFTP.
* Automated deployment using CI/CD pipelines.
* Direct commits to a production branch in version control, if configured to auto-deploy.
* Ensure that backups and a rollback plan are in place before deploying.

### Additional Notes

1. All changes to the theme and plugins should be tracked in version control.
2. Maintain coding standards and documentation for future developers.
3. Test on different browsers and devices to ensure compatibility.

---------------
    Support
---------------
For any questions or support, please contact the project lead or refer to the WordPress Codex and developer resources for guidance.
