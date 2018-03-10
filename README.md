
![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/GreatSeal.png)
---------

| ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/DOT.png)  | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/WATI.png) |
| ------------- | ------------- |



## Request for Interest CDT–PQVP–0118

# Pre-Qualified Vendor Pool for Agile Development – Digital Services

------------------------
# Working Prototype Functionality

West Advanced Technologies, Inc. (WATI) developed the “Knowledge Management Tool” (KMT) with the following functions as required by DOT. 

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

1. code flow from client UI, to JavaScript library, to REST service to database, pointing to code in the GitHub repository.   

![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/KMT-ServerView.png)



**a. Code flow**
Code in the GITHub is available at the following URL: https://github.com/watipqvp/CDT-PQVP-0118-WATI
The code organized in the root folder **CDT-PQVP-0118-WATI** consists of:
- wp-admin:    
- wp-content:  
- wp-includes: 

Some of the important files in root folder include:
- wp-config.php: Contains DB credentials and authorization keys.
- wp-login.php:  User authentication operations code such as password handling.
- wp-mail.php:   Generates Wordpress post messages from the Incoming User emails.
- swagger.json:  Open API REST specifications made available to web clients.

**b. DB Schema**

**c. Deployment Environment**























 
 
 
