
![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/GreatSeal.png)
---------

| ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/DOT.png)  | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/WATI.png) |
| ------------- | ------------- |



## Request for Interest CDT–PQVP–0118

# Pre-Qualified Vendor Pool for Agile Development – Digital Services

------------------------
# Working Prototype Functionality
 
West Advanced Technologies, Inc. (WATI) developed the Prototype “Knowledge Miner”, the “Knowledge Management Tool” (KMT) with the following functions as required by “California Department of Technology”.

------------------------

|   |  |
| ------------- | ------------- |
| **Tool Hosted IP:**  | http://96.67.213.65/wp-login.php  |
| **GitHub Code Link:**  | https://github.com/watipqvp/CDT-PQVP-0118-WATI  |
| **Login in User IDs (Password: temp123)** | admin1, admin2, author1, author2, editor1, editor2, subscriber1, subscriber2, contributor1, contributor2 |
|   |  |

------------------------

# a.  Knowledge Creation

**1. Create “knowledge articles” (KAs) - These can be original records (e.g., specific work instructions or content) and/or packages of content, including documents, user-configurable forms, tables, and workflows** 

The Page or Post Creation is helped by Editor which allows to layout the panel area into rows and columns. “Add Row” allows to add a row with specified number of columns of desired/variables size. Each of the layout area can include different UI widgets. Further Pages can include Posts and Post can Include Pages. ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_1.png)

To add the content, the widget with name “SiteOrigin Editor” can be selected to start editing rich text content. Many other widgets allow creating rich content.

 ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_2.png)
 
 Widgets on Left Panel are classified into Groups of controls:
- Ultimate Addon Bundle: Mainly to organize contents into multiple tabs.
- Widgets Bundle: Widgets such as Button, Contact Form, Editor, Features, GoogleMaps, Image, Post Carousel, Slider, Tabs, Taxonomy
- Page Builder Widgets: Layout Builder, Post Content, Post Loop
- WordPress Widgets: Archives, Calendar, Categories, Meta, Navigation Menu, Pages, RSS, Search and other External World Blog Posting related widgets

The graphical design performed (in “Page Builder” view) will correspond to embedded HTML in “Visual” or “Text” view as follows (for example): 
- [siteorigin_widget class="Faqs"][/siteorigin_widget]
- [siteorigin_widget class="Tabs"][/siteorigin_widget]
- [siteorigin_widget class="SiteOrigin_Widget_PostCarousel_Widget"][/siteorigin_widget]

Tables can be created using Rich Text Editor option of “Insert Table”.  “TablePress” widget allows to create a tables with data upload in predefined format and then, insert it into the Blog Post using the Click and select option. The insert shortcode option with insert the table with simple inline embedded tag as follows:

[table id=1 /]

The following Menu (“TablePress”) on the left Panel allows to create tables normally or through importwith data in different formats (CSV, HTML, JSON, XLS, XLSX): 

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_3_1.png)  
![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_3_2.png) 
 
 TablePressWidget Button on the RichText Editor can be seen as in the following diagram:
 
 ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_4.png)
 
Workflows in the KMT are restricted to only “1-worflow” at present. The workflow can be deleted and re-created as per the new/changed requirements. Workflow can be defined to dynamically review the publish process before the “Knowledge Content” blog is published to the world. The left side panel, workflow allows to edit the workflow and set validity.

 ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_5.png)
 
It is possible to define who all can submit the created content to the workflow and also the type of post.
Workflow after “create” and “save”, followed by “Activate” workflow from “Workflow” settings, will become available next to publish button on the Right panel with button label “Submit to Workflow”.


| ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_6_1.png)  | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_6_2.png) | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_6_3.png) |
| ------------- | ------------- | ------------- |

Once the workflow is submitted, it the history can be tracked through “Workflow History” on the left menu panel.
 
![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_7.png) 



 **2. Multiple levels and formats of information in KAs (e.g., bullet points for senior technical levels, scripted specific details for junior/non-technical staff)**
 
 During the creation of Knowledge Articles, specific content can be enclosed with Restricting the content access using the following text inline in the body of the content:
 
[restrict role="editor, contributor" page="1"]
This content can only be seen by editors and contributors.
Other users will see content from page with ID 1.
[/restrict]

Multiple Levels of content can be created using
- Bulletted text (Inline Rich Editor Functionality),
- Expand/Collapse Content using Collapse Expand Drag-Drop Widget

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a2_1.png) 


Initially the expandable list will be shown with the predefined text which can be clicked to expand the entire list with the clicked text dynamically changed to a collapsible string:

[bg_collapse view="link" color="#4a4949" expand_text="Salient Features for Elder Readers" collapse_text="Salient Features for Elder Readers - Show Less" 
<p>Chemistry: Chemistry is the scientific discipline involved with compounds composed of atoms, i.e. elements, and molecules, i.e. combinations of atoms: their composition, structure, properties, behavior and the changes they undergo during a reaction with other compounds. </p>
<p>Physics: Physics (from Ancient Greek: φυσική (ἐπιστήμη), translit. physikḗ (epistḗmē), lit. 'knowledge of nature', from φύσις phýsis "nature"[1][2][3]) is the natural science that studies matter[4] and its motion and behavior through space and time and that studies the related entities of energy and force.</p>
<p>Mathematics: Mathematics (from Greek μάθημα máthēma, "knowledge, study, learning") is the study of such topics as quantity,[1] structure,[2] space,[1] and change.[3][4][5] It has no generally accepted definition</p>
[/bg_collapse]



**3. Allow for role-based security access, to allow control of access and level of information by login**

To make it cleaner, it is possible to create different Access Roles for different types of users for the left panel “User Access”:

 ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a2_2.png) 
 ----------------------
 
 # b.  Knowledge Sharing

**1. Allow for the promotion of process and information across systems and channels, as requireds** 

There are two tools implemented for the promotion of content process and information across systems and channels.

*Promotion of Process:* Promotion of process is supported by “Workflow”. The tool allows the author to create the content either graphically or using HTML tags and trigger the workflow process for necessary review/corrections process assigned to specific users. The “Workflow” can be configured for auto-escalation and eMail notification. At the end of the workflow process, the blog/Knowledge content will be ready to Publish.

*Promotion of information across systems and channels:* It is possible to publish knowledge content directly or through Workflow process depending on access right configured. The content can be published with scope of Private or Public. “Private” option, published content only to the users of the organization whereas “Public” option, publishes the content to entire world through standard social media and other SEO channels. The Publish Options can be calendar driven to publish at a certain chosen future time. 

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a3_1.png)



**2. Have the ability to create user-defined rules for creation (e.g., mandatory fields) and lifecycle management (e.g., who, how, when revised and updated)**

Selection of the left side Menu “Posts” lists all the posts, with auto populated mandatory field information of who-created, when-last-revised and updated and other important information, including taxonomy i.e. category of posts and all the tags associated with the Content. 

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a4_1.png)

Workflow also allows to customize the rules as required. At each workflow step level, it is possible to configure the next step together with a custom eMail definition to process.


![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a4_2.png)


**3. Trigger escalation processes (e.g., automated emails/texts to approvers, reminders) for lifecycle activities** 

The Workflow InBox – shows the workflow dynamics as workflows are delegated. Inbox in workflows right panel menu shows the Work delegated. 

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a5_1.png)

Workflow Settings, contain Email Tab which configures the Email settings:

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a5_2.png)


The escalation frequency of intimation can be set through the following settings:

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a5_3.png)

------------------------
# c. Knowledge Development

**1. Have the ability to update and improve KAs and access the value of usage as input to predicting new records or record types**

When creating content, it is possible to refer to other similar and related posts by automatically matching the keywords used in the content. The Content edit process also recommends the keywords which are more popular in the content authored areas. The related posts button is available on the right side next to “Publish” button which brings up the internal or external world search by keywords for related posts. 

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a6_1.png)

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a6_2.png)



**2. Show innovation by learning from existing records (e.g., types, content, usage) and prompting to create new KAs**

The contextly settings can be configured so as to prompt to search and pick related posts before publishing. These existing records can be used for modifying and updating the content making it more up-to-date and rich in content.

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a7_1.png)


# Technical Approach 
  
**a. Code flow and Deployment**
Code in the GITHub is available at the following URL: https://github.com/watipqvp/CDT-PQVP-0118-WATI
The code organized in the root folder **CDT-PQVP-0118-WATI** consists of:
- wp-admin     
- wp-content  
- wp-includes 

Some of the important files in root folder include:
- wp-config.php: Contains DB credentials and authorization keys.
- wp-login.php:  User authentication operations code such as password handling.
- wp-mail.php:   Generates Wordpress post messages from the Incoming User emails.
- swagger.json:  Open API REST specifications made available to web clients.

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/KMT-ServerView.png)

**b. Tool compliance to US Digital Services Playbook**

Note: Whenever Plug in mentioned, it refers to folder wp-content/plugins folder in repository.
Kanban is accessible through “Kanban” menu or URL eg: http:// 96.67.213.65/kanban/board?board_id=1

*Play-1*
- Primary Users: Youngsters, Elder People, Disabled persons, both experienced and non-experienced in web technologies operating with different electronic devices [ Users and User AccessRoles PlugIns ]
- User needs Addressed: User friendly and platform independent for deployment and easy hosting [ SiteOrigin PlugIn, RichTinyMCE PlugIns ]
- User need for this service: Need for a social collaboration knowledge base [ wp-includes/rest-api ]
- People with most difficulty with the service: Who do not have a registered login and password [ ws-admin folder ]
- Research methods used: State of the art technologies, ease of enhancements and off-the-shelf plugin tools/features [ wp-content/plugins ]
- Key findings: User friendliness and compliance to guidelines makes the product long-lasting [wp-content/themes]
- Documentation of Findings: Kanban Dashboard accessible from within Tool [Kanban plug in]
- Frequency of Testing by End-Users: Continuous through-out development [Jenkins Build Job – PhpUnits of PlugIns]

*Play-2*
- Current Approach: The knowledge content in the form of Blogs can be searched internally or external world through keyword(s)[wp-autosearch PlugIn] 
- Pain points: There are no known Pain points. Knowledge collaboration is a concept that eliminates the major pain-point of rework. 
- Place of tool in overall big picture: Off-the-shelf plug-and-play Customization to handle operations privately and only go public when required [PlugIns Folder]
- Metrics of Tool Services: SEO tools are in-built to provide the metrics. [google-analytics-for-wordpress, cms-tree-page-view PlugIn]

*Play-3*
- Primary User Tasks: 
    - Add the content intelligently with help of suggestive tools, multi-media and great rich text editors. 
    - Share the information to enable search the knowledge. 
    - New Knowledge Development through proactive suggestions and recommendations.
       [GitHub Root - CDT-PQVP-0118-WATI]
- Tool Language: Language used is plain and universal with ability to easily custom configure to a different language of choice [wp-admin/includes]
- Supported Languages:  US English and Web compliance GUI with millions of installations all over the world. [wp-admin/includes] 
- User Help: Entire application is developed through graphical icons for knowledge creation and universally recognized icons for general operations. User can reach WATI admin through a simple eMail. [embed-swagger PlugIn, WPForms]
- Tool UI’s similarity to other government Services: Very standard multi-tier RESTful framework just as other Government services – platform agnostic virtual infrastructure and off-the-shelf opensource software tools. [wp-content/themes]

*Play-4*
- Tool MVP Status: Prototype is ready and made public to CDT. [http://96.67.213.65/]
- Production Deployment Duration: Few minutes of deployment process [Jenkins]
- Iteration/Sprint Duration: 3 weeks of duration with 22 tasks approximately 150-200 hours of effort. [Kanban plug in]
- Version control system: GitHub with SourceTree.
- Bug Tracking: Daily Scrum meetings – email circulation. [Minutes of Meetings, Kanban]
- Feature Backlog Management: Built-in Kanban board is used for backlog and sprint management. [Kanban]
- Feature and bug backlog review/reprioritization: Review and task prioritization of feature and bug backlog is done multiple times every day. [Kanban]
- User feedback Collection and Service Improvement: eMail is used to collect the user feedback [WPForms, MailBank PlugIn]
- Gaps found during usability testing: Some Gaps for example are: Ability to hook up a Jabber/calling phone service, ability to chat with bots, Trouble ticket logging system. etc., 

*Play-5*
- Scope of the project and the key deliverables:Key deliverables are public access to the 
  - Source code [GitHub Root - CDT-PQVP-0118-WATI]
  - Hosted tool URL with initial logins [http:// 96.67.213.65/wp-login.php]
  - Readme.md to help easily customize/enhance and install the product as needed [Readme.MD]
- Milestones and Frequency:Knowledge Creation, Share Knowledge, Develop Knowledge are key milestones. Twice Weekly are milestones. [Kanban]
- Performance Metrics: Compliance to given disability and other guidelines[google-analytics-for-wordpress, cms-tree-page-view PlugIn]

*Play-6*
- Product Owner: WATI Vice President – Krishna.Chintalapathi
- Product Owner Project Authority: The product owner is also product administrator user.
- Add or remove a feature from the service: Product Administrator uses can use Left Panel – “PlugIns” to add/remove any service. [PlugIns Folder]

*Play-7*
- WATI, headed by Srinivas.Veeramasu, works exclusively on Government projects.

*Play-8*
- Choice of development stack: Wordpress web framework, MySQL DB, Docker/Hyper-V virtual machine. The choice of technologies is as per requirement for Opensource technologies with off-the shelf modules [IP: 96.67.213.65]
- Choice of databases: MySQL DB, because it is opensource. [WP-DBManager, Ari Adminer WordPress Database Manager PlugIns]
- Learning time for a new development team: 2 to 3 days of training for someone who has basic web technologies experience. [ReadMe.md]

*Play-9*
- Service hosting: Hosted on WATI server farm in Los Angeles, CA. 
- Hardware platform: 4 TB hard disk, 4 CPU Server machine. 
- Demand or usage pattern for the service: Can easily support 10+ concurrent users. Total users can be much higher.  There can be some bottleneck with email traffic.
- Service impact due to surge in traffic or load:Depends on network and hardware capabilities [Jetpack plugin]
- Hosting environment capacity:We can scale to support any bandwidth by moving to cloud [Jetpack plugin]
- Duration to provision a new resource: Provisioning:
    - Software will take no more than a couple of hours. 
    - Hardware infrastructure can take few days. 
    - Cloud solution will take tentatively maximum a day. 
   [Load Balancer can be configured as per need]
- Service scalability on demand:The system is loosely coupled REST API solution, it can easily scale to any bandwidth. 
[ Multi site can be configures as per need]
- Service Infrastructure Tariff: Cloud tariff is based on Hourly rate. Tool is hosted on-premise at WATI server farm. 
[AWS can be a choice for high performing cloud environment]
- Is the service Multi-Site:The service can be configured and hosted as multi-site -- multiple regions, zones. The solution is presently hosted as single site. 
- Service outage on catastrophic disaster:Service should be restorable immediately after the disaster situation is cleared.  
[AWS cloud deployment is a choice]
- Impact of a prolonged downtime window:Solution can be easily hosted on cloud in the event of prolonged downtime.
[AWS cloud deployment is a choice]
- Built-In Data redundancy and impact of a catastrophic data loss:Implemented infrastructure/tool has hot backup.
[Database Backup Tool]
- Reach to Hosting Environment Personnel:Time from person hosting provider is variable between 0 to few hours. [wpforms plugin - Contact Form address to cloud hosting contact personnel]

*Play-10*
-Code Coverage by automated testing: Coverage is 100% for pure PHP plugIns. Other hybrid PlugIns are unit tested manually thoroughly. [Gravitate Tester PlugIn]
- Bug fix cycle duration: A bug, when Identified will be resolved in few hours not more than a day. Functionality or feature enhancement can take from 1 to 3 days. [Kanban]
- New Feature duration: New features will be configured using available open-source tools instead of coding from scratch. New functionality to code, can be developed in short sprints of few weeks duration.  [Kanban]
- Frequency of builds: Build during development phase are created daily. [Jenkins] 
- Test tools Usage: Jenkins CI/CD Plug-In tools are used to testing. [Gravitate Tester]
- Deployment automation or continuous integration tools: Jenkins has been used to continuous integration. [Jenkins]
- Estimated maximum number of concurrent users: No limit, system will scale as per the need. [SEO Metrics]
- Simultaneous users: Simultaneous User testing is validated through plug-ins. [Google PageSpeed Insights, SEO Metrics]
- Service performance during exceeded target usage volume: Users will get graceful timeout message as response. 
- Scaling strategy on sudden demand increase: System will proportionately use resources for optimum performance. 

*Play-11*
- User notification of collection of personal data: Users configuration module collects basic user demographics. User acceptance is mandatory before storing details. [Users Forms] 
- Collection of Information: The user data is just the minimum required to maintain user account and it is highly confidential. [Users Forms]
- User access to correct, delete, or remove personal information:Only administrator and User himself have the access to information for correction or modification. User deletion can be done only by Admin. [Users List]
- Personal information security: No personal information will be shared with other services, people, or partners. [Users Forms]
- Security Vulnerability Testing: Security testing, firewall port monitoring is done through a plug-In and also using Anti-Virus. 
[Wordfence Security – Firewall & Malware PlugIn]
- Reporting a security issue: Through an eMail to the contact person, user can report a security issue. [WPForms]

*Play-12*
- Key metrics for the service: Number of users, operations, duration of usage are some of the important metrics out of all SEO metrics which are captured. [Google Analytics PlugIn]
- Performance of Metrics over the life of the service: The metrics are collected over the life of service across all operations and users.
- System monitoring tools: The product is in-built with SEO tools which monitor the metrics. General server operations are measurable through OS standard tools for memory, CPU cycle, stack, heap etc.,
- Targeted average service response time in seconds: The response time duration is dependent based on load, but within required limits. 
- Average response time and percentile breakdown: The response time duration is variable and dependent on load.
- Service Started Versus Failed Status: System SEO Metrics shows the number of failed transactions.
- Service’s monthly uptime target: 99.99 is our monthly uptime target. 
- Service’s monthly uptime -- Including/Excluding scheduled maintenance: 99.99% uptime in either case with or without maintenance window.
- Automated alerts on incidents: Email alerts when a service goes down for some reason [PowerShell script, cloud notification]
- Post incident report process: We look through the Log and Metrics to assess problem condition to determine the resolution.
- Tools to measure user behavior: Intelligent plugins constantly learn to improve on user behavior. 
- Tools or technologies are used for A/B testing: Web app automated testing will be used using open source technologies to determine performance of one-webpage over the other. 
- Customer Satisfaction: Through customer feedback of issues, customer satisfaction is measured. [WPForms]

*Play-13*
- Collection of user feedback for bugs and issues: Administrator can configure an opensource PlugIn of choice which can allow users to log defects and track status. [WPForms ]
- API capabilities, uses and documentation: All the data commit and retrieve operations can be done through REST API and swagger/OpenAPI documentation has the details. [Embed Swagger PlugIn]
- Is the codebase not released under an open source license: Entire Code is Open-Source and unobfuscated.
- Available open source components to the public: All the components are opensource off-shelf plug-play Javascript/PHP modules.
- Datasets made available to the public: The tool is not dependent on any data sets, so does not include any datasets.


**c. Technical Approach Requirement Checklist: **

a. WATI President Srinivas (Srinivas@wati.com) is Prototype Signoff Authority.	

b. Five (5) of the labor categories as identified in Attachment B: PQVP AD-DS Labor Category Descriptions; 
 - krishna@wati.com (Product Manager-1)
	- sivakumar.a@wati.com (Delivery Manager-10)
	- vaibhav.k@wati.com  (Technical Architect-2)
	- sravanthi.k@wati.com (Frontend Web Developer-6)
	- vijay@wati.com (Business Analyst – 12) 

c. Agile User Stories were based on People need as obtaining through involvement. 
 
d. Used three (3) “user-centric design” techniques and/or tools; 
•	WordPress Web framework, 
•	Swagger OpenAPI RESTful Web Services, 
•	Docker OS – Virtualization Deployment.

e. Used GitHub to document code commits: https://github.com/watipqvp/CDT-PQVP-0118-WATI

f. Used Swagger OpenAPI to document the RESTful API, and provided a link to the Swagger OpenAPI; 
  [http://96.67.213.65/swagger.json] from within tool: [swagger url="http://96.67.213.65/swagger.json"]

g. Complied with Section 508 of the Americans with Disabilities Act and WCAG 2.0; 
	Used the graphically designable “Site Origin” Layout Manger and Widget Bundle-Set. 

h. Used ‘wordpress’ design style guide and/or a pattern library. 

i. Performed minimum usability tests with people and automated tool tests.  

j. Agile Sprints (tracked through Kanban boards) used for iterative development.

k. Used responsive theme to work on multiple devices

l. Used five (5) modern2 and open-source technologies: 
•	Kanban for Agile Sprint 
•	Site Origin Widget Sets for Blog Creation graphically
•	Gravitate for Automated Testing
•	Oasis Workflow for Publish Workflow Process 
•	Database-Browser for Database administrative tasks

m. Deployed the prototype on Docker as a Service (IaaS) or Platform as Service (PaaS) hosted by Hyper-V Wati Virtual Platform. 

n. The PHP PlugIns are provided with PHPUnit automated unit tests. 

o. Jenkins is used as a continuous integration system to automate the running of tests and continuously 
               deploy the code to the IaaS or PaaS.  

p. GitHub with SourceTree used as configuration management; 

q. Jenkins is Setup for continuous monitoring to alert build/testing failures;  

r. Deployed the software in an open source container, Docker (i.e., utilized operating-system-level virtualization);  

s. Provided sufficient documentation to install and run their prototype on another machine;
	Details are provided as a Knowledge Post within the tool. 

t. The prototype and underlying platform are openly licensed and free of charge.  




























 
 
 

