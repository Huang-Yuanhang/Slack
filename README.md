James Cook University Website Development README
Group 3 SP53 CP3402 CMS

### Overview

This document provides all the necessary information for a developer to continue developing and deploying the project Openhouse website. The website is a custom WordPress theme designed to provide an engaging and informative experience for prospective students, parents, staff, and the academic community.

### Project Structure
The project is structured as a custom WordPress theme built from the _s [(Underscores)](https://underscores.me/) starter theme. 
<br>The development files are uploaded in [this repository](https://github.com/Huang-Yuanhang/Slack), containing the theme, plugins, and media used in the site's construction.
<br>The version of the project is as follows, version 1 > version 2 > version 3 > finished product - JCU Openhouse

### Project Showcase

* Visit Site [live](http://jcu14405427.rf.gd/) <br>
![fullsite](https://github.com/Huang-Yuanhang/Slack/blob/main/a2%20gif/fullsite.gif)
* Animated visual
<br> ![ranking](https://github.com/Huang-Yuanhang/Slack/blob/main/a2%20gif/ranking.gif)
* Features
<br> ![backtotop](https://github.com/Huang-Yuanhang/Slack/blob/main/a2%20gif/backtotop.gif)

#### Code Showcase Gallery

| Animation Trigger Code | Ranking Bars Implementation | CSS Animation Details |
|:----------------------:|:---------------------------:|:---------------------:|
| <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20showcase%20code%201.png" width="100px" /> | <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20showcase%20code%202.png" width="100px" /> | <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20showcase%20code%203.png" width="100px" /> |
| HTML and CSS setup for ranking bars | This JavaScript snippet triggers animations. | CSS snippet for animation properties. |

See full code [here](https://github.com/Huang-Yuanhang/Slack/tree/main/finished%20product%20-%20JCU%20Openhouse)

### a2.html
This file contains our team's, names, live site links, and project documentation; notably brief Local Environment and site goals.
* <a href="https://github.com/Huang-Yuanhang/Slack/blob/main/a2.html" target="_blank">a2.html</a>

### Local Development Environment
The website was developed using [XAMPP v3.3.0](https://www.apachefriends.org/) as the local server environment with [WordPress 6.4.2](https://wordpress.com/) installed on it.

Installation
---------------

### Prerequisites:

* XAMPP v3.3.0 or above
* WordPress 6.4.2
* Visual Studio Code (or any preferred IDE)

### Setup:

* Extract the WordPress 6.4.2.. ZIP archive to the htdocs directory in your XAMPP installation.
* Configure XAMPP to run the MySQL database and Apache server.
* Access the WordPress installation through https://localhost/wordpress-6.4.2/wordpress/ and complete the setup.
* Activate the custom theme from the WordPress admin dashboard under Appearance > Themes.

* For this project, access the staging/ live site through WP admin (login information in [a2.html](https://github.com/Huang-Yuanhang/Slack/blob/main/a2.html)) and export the backup through your choice of plug-in and import it to your WP environment.

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

1. Pull the Latest Code: If working in a team, ensure you have the latest version of the code from your version control system.
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
4. Due to being unable to configure the underscores theme name, '@package version2', as we didn't want to change and corrupt the whole file (this is untested), we decided to leave the name as that.
* this makes uploading the theme files to WordPress will leave the name of the theme as version2.

### Group 3 Project Documentation
---------------

### Goals
* Deliver a product that serves as an effective digital front door that welcomes, informs, and converts visitors through a high-quality online experience that mirrors the institution's respectable standards.
* Increase conversion rate
* Increase acceptance rate: 5%
* Increase open house attendance rate: 10%

### Deployment
As for our choice of deployment, our team chose [infinityfree hosting site](https://www.infinityfree.com/)
* [Live Site](http://jcu14405427.rf.gd/)
* <i>it is worth mentioning that I have been unable to solve the issues of hero-video not appearing on the live site sadly :( .</i>
* [Staging Site](http://jcu14405427.rf.gd/wp-admin/)

### Hosting Site: Decision Making

Hosting Providers Overview
<br>Free Hosting Providers:

#### InfinityFree
| Pros  | Cons |
| ------------- | ------------- |
| No cost  | Limited server resources |
| Free Subdomain  | No ditect support  |
| No ads | - |

Reason for Choosing:
* Cost-effective for testing and small projects.
* Quick setup without initial investment.

#### 000WebHost

| Pros | Cons |
| ------------- | ------------- |
| Free with PHP and MySQL support | Forced ads on free tier |
| One-click WordPress installation | Limited bandwidth and disk space |

#### AwardSpace

| Pros | Cons |
| ------------- | ------------- |
| Free with ad-free hosting | Limited bandwidth and storage |
| Includes one email account | Only one domain allowed on the free plan |

Paid Hosting Providers:

#### SiteGround
<i>SiteGround does offer free tier as Educational account, although, I have already used this :( </i>

| Pros | Cons |
| ------------- | ------------- |
| Excellent customer support | Higher cost compared to others |
| Managed WordPress hosting with automated updates | Limited storage on lower-tier plans |
| Free SSL and CDN | - |

#### Bluehost

| Pros | Cons |
| ------------- | ------------- |
| Recommended by WordPress.org | Upselling during the signup process |
| Free domain for the first year | Rates increase on renewal |
| User-friendly for beginners | - |

#### WP Engine

| Pros | Cons |
| ------------- | ------------- |
| Premium managed WordPress hosting | Expensive for high-traffic sites |
| Strong focus on speed and security | Storage limits could be restrictive |
| Staging environments for testing | - |

Selection Rationale for InfinityFree
<br>
InfinityFree was chosen based on several criteria pertinent to the project's requirements:

* Budget: As a cost-free solution, it allows for the deployment of the site without * immediate financial investment.
* Simplicity: Offers a quick and easy setup, which is ideal for initial testing and small-scale deployments.
* Flexibility: Provides enough resources for a starter website, with options to upgrade to a paid service if necessary.

#### Conclusion

Reason for Choosing InfinityFree:
* Cost-effective for testing and small projects.
* Quick setup without initial investment.

Each hosting provider has its unique set of features, and the best choice will depend on specific project needs such as budget, scale, performance, and support. <br>InfinityFree stands out as an excellent starting point for its no-cost service, making it suitable for initial deployments of small WordPress projects.

### Workflow
------------------------------------------------------------------------------------------
Trello/Discord -> Slack -> XAMPP -> Wordpress -> VSCode -> Github -> Staging -> Live Site 
------------------------------------------------------------------------------------------

The development workflow for the website project incorporates a structured approach, focusing on team collaboration, code quality, and performance optimization. 
<br>Here's the refined workflow considering the new information:

1. Communication and Collaboration
* Clear Communication Channels: Use platforms; Slack and Discord for daily communication.
* Project Management Tools: Organize tasks and milestones using Trello and Discord Channels.
* Collaboration Tools: GitHub repository for document sharing and collaboration.
* Efficient Communication Methods: Weekly meetings, daily stand-ups, and regular check-ins at weekly practical sessions.

2. Development Environment
* Local Development Environment: Utilize XAMPP for local development and testing.
* Content Management System: WordPress 6.4.2 latest ver. at the time.
* Foundation Theme: [Underscores](https://underscores.me/)
* Version Control: Use VSCode for version control with a repository hosted on GitHub.

3. Coding Standards and Review
* Coding Standards: Adhere to WordPress and foundation theme ([Underscores](https://underscores.me/)) coding standards for PHP, HTML, CSS, and JavaScript.
* Code Review Tools: Enforce coding standards through regular checkups, though implementing tools like; ESLint, Stylelint, and PHPCS would be more appropraite.
* Peer Reviews: Conduct code reviews weekly to ensure quality and consistency.

4. Plugin and Theme Management
* Organization: Maintain a well-structured directory for themes and plugins.
* Version Control: Track all changes in the version control system through syncing VSCode with GitHub repo.
* License Management: Only license from Underscore theme applied, GNU GENERAL PUBLIC LICENSE, Version 2, June 1991

5. Performance Optimization
* Speed Optimization: Implement the fondational code from Underscore theme like get_template_php().
* Minification and Compression: Ensure clean CSS, JavaScript, PHP, and HTML content.
* Database and Server Optimization: Optimize tXAMPP and WP configurations to fine-tuned for performance.

6. Testing and Quality Assurance
* Testing: Set up testing frameworks and template for PHP and JavaScript code.
* Testing Guidelines: Establish thorough guidelines and checklists for testing aspects of the site.
* Security Best Practices: Implement and enforce security measures, through WordPress plugins, including regular updates and backups.

7. Deployment and Maintenance
* Deployment Strategies: Define a clear deployment process.
* Hosting Site: List out pros & cons of available hosting sites for final decision. 
* Maintenance Workflows: Establish ongoing maintenance responsibilities to keep the site updated and secure, rotating members periodically.
  
### Version Control (Screenshots)
| Version 1 | Version 2 | Version 3 |
|:----------------------:|:---------------------------:|:---------------------:|
| <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20version%201%20-%20first%20creation.png" width="100px" /> | <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20version%202%20-%20theme%20creation.png" width="100px" /> | <img src="https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/a2%20version%203%20-%20full%20site.gif" width="100px" /> |
| [First Creation](https://github.com/Huang-Yuanhang/Slack/tree/main/version%201) | [Theme Creation](https://github.com/Huang-Yuanhang/Slack/tree/main/version%202) | [Full Site](https://github.com/Huang-Yuanhang/Slack/tree/main/finished%20product%20-%20JCU%20Openhouse) |

### Team Management Links
* [GitHub](https://github.com/Huang-Yuanhang/Slack) 
* [Slack](https://join.slack.com/t/cp3402hq/shared_invite/zt-29xrx5suu-AZqTqHKQyB3xvqQUB9crhw) 
* [Discord](https://discord.gg/CZE7EJJQXa) 
* [Trello](https://trello.com/invite/cp3402pbgroup3/ATTIfb2a4209a4423206cfd8c0d88d601c9cCA6346E9) 

#### Team Management reference material
![slack](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/slack.png)
![trello](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/trello.png)
![discord1](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/dc1.png)
![discord2](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/dc2.png)
![discord5](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/dc5.png)
![discord8](https://github.com/Huang-Yuanhang/Slack/blob/main/Screenshots%20Evidence%20for%20A2/dc8.png)


see more material reference [here](https://github.com/Huang-Yuanhang/Slack/tree/main/Screenshots%20Evidence%20for%20A2)

* Presentation Link: https://www.canva.com/design/DAF5eznj3fs/v7q9WYEo51VjKDN95LO-gw/edit?utm_content=DAF5eznj3fs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton

---------------
    Support
---------------
For any questions or support, please contact the project lead or refer to the WordPress Codex and developer resources for guidance.
