
![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/GreatSeal.png)
---------

| ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/DOT.png)  | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/WATI.png) |
| ------------- | ------------- |



## Request for Interest CDT–PQVP–0118

# Pre-Qualified Vendor Pool for Agile Development – Digital Services

------------------------
# Working Prototype Functionality

West Advanced Technologies, Inc. (WATI) developed the “Knowledge Management Tool” (KMT) with the following required functions. 

**a.  Knowledge Creation**

**Create “knowledge articles” (KAs) - These can be original records (e.g., specific work instructions or content) and/or packages of content, including documents, user-configurable forms, tables, and workflows** 

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

|![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_3_1.png)  | ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a1_3_2.png) |
 
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



 **Multiple levels and formats of information in KAs (e.g., bullet points for senior technical levels, scripted specific details for junior/non-technical staff)**
 
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



**Allow for role-based security access, to allow control of access and level of information by login**

To make it cleaner, it is possible to create different Access Roles for different types of users for the left panel “User Access”:

 ![alt text](https://github.com/watipqvp/CDT-PQVP-0118-WATI/blob/master/wp-includes/images/README-ImageGallery/a2_2.png) 
 
 
 
 
 
 

