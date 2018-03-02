=== WP Mail SMTP, Mail Logs, Gmail SMTP, Phpmailer - Mail Bank ===
Contributors: contact-banker, Gallery-Bank, wordpress-empire
Donate link: https://mail-bank.tech-banker.com/
Tags: gmail smtp, smtp, mail, phpmailer, wp mail, wp mail smtp, wordpress smtp, wordpress smtp plugin, wp_mail, oauth, smtp email wordpress
Requires at least: 3.6
Tested up to: 4.9
Stable Tag: trunk
Requires PHP: 5.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WordPress SMTP Plugin that sends outgoing email with WP SMTP settings securely. Supports Gmail SMTP, Sendgrid SMTP, ouath, email logs, phpmailer!

== Description ==

### #1 WP MAIL SMTP PLUGIN FOR WORDPRESS

[**Mail Bank**](https://mail-bank.tech-banker.com/) | [Documentation](https://mail-bank.tech-banker.com/documentation/) | [Demos](https://mail-bank.tech-banker.com/backend-demos/)

https://youtu.be/f2C2mUnMRPA

Is your WordPress site facing problems sending emails to your customers?

Have you set up contact forms on your WordPress site, only to find that the emails aren’t getting delivered?

= The Problem with WordPress Emails =

WordPress uses **phpmailer** for outgoing emails. Many shared hosting providers do not have this function configured properly, or they have disabled it entirely to avoid abuse. In either case, your WordPress emails are not delivered.

Well, It’s common to face email delivery issues in WordPress, but this can be fixed by using WP Mail SMTP by Mail Bank for safe, reliable email delivery.

= What is SMTP? How to send mail with SMTP? =

SMTP stands for **"Simple Mail Transfer Protocol"**. It relies on a connection to an external mail server for outgoing email messages. This requires some setup and configuration, but has some huge advantages and is definitely worth the effort!

SMTP is the industry standard for ensuring email deliverability, and WP Mail SMTP by Mail Bank is the most flexible way to connect to many different SMTP Servers.

This WordPress SMTP plugin reconfigures the **wp_mail()** function so all your emails from your WordPress site can be sent using **SMTP Settings** instead of using **Phpmailer** function.

It allows you to send email directly through your mail server as opposed to the web server. This helps to prevent issues with **Sender Domain Policy** and **Spoofing**.

The goal of our WordPress SMTP plugin is to help fix the common **"WordPress not sending email"** issue.

Over 50,000+ websites use [**Mail Bank**](https://mail-bank.tech-banker.com/) to get their **outgoing email** deliverability issues fixed easily.

= Mail SMTP Plugin by Mail Bank Features =

* **Multisite Compatible** – Supports Multisite environment.
* **From Name Configuration Setup** - Filter to override the Sender Name in the **'From'** header field of the email
* **From Email Configuration Setup** - Filter to override the Email Address in the **'From'** header field of the email.
* **Reply To Option** - A valid Email Address that will be used in the **'Reply-To'** field of the email.
* **Encryption** - A valid Email Address that will be used in the **'Reply-To'** field of the email.
* **CC / BCC** - A valid Email Address that will be used in the **'CC'** and **'BCC'** fields of the email.
* **Additional Headers** - Additional Headers that can be included in the outgoing email.
* **Use SMTP Settings to send WordPress emails** – Specify SMTP Settings for your outgoing emails.
* **Encryption** – Choose SSL/TLS encryption for your SMTP Connection.
* **SMTP Host** - This is the address to the host's SMTP server.
* **SMTP Port** - Port to connect to the email server.
* **Avoid Trouble Sending Email** – Bypass the default phpmailer function for sending wp_mail and sending via SMTP server with proper SMTP Authentication will increase email-deliverability.
* **Authentication** – Method for authentication. Choose between None, Login, OAuth, Cram-MD5 or Plain.
* **Username and Password Settings** – Specify an SMTP username and password for your SMTP Server.
* **Password Encryption** – Support for password encryption.
* **Hide Passwords** – SMTP password is always hidden.
* **Connectivity Test** – Test the communication between WordPress and the SMTP server.
* **Log Outgoing Emails** – The most advanced plugin to log the outgoing emails and the SMTP client-server messages.

> #### **Live Demos - Mail Bank**

> * [WP Mail Bank](https://mail-bank.tech-banker.com/)
> * [WP Mail Bank Demos](https://mail-bank.tech-banker.com/backend-demos/)
> * [Installation](https://mail-bank.tech-banker.com/backend-demos/installation/)
> * [Email Setup](https://mail-bank.tech-banker.com/backend-demos/email-setup/)
> * [Test Email](https://mail-bank.tech-banker.com/backend-demos/test-email/)
> * [Connectivity](https://mail-bank.tech-banker.com/backend-demos/connectivity-test/)
> * [Email Logs](https://mail-bank.tech-banker.com/backend-demos/email-logs/)
> * [Plugin Settings](https://mail-bank.tech-banker.com/backend-demos/plugin-settings/)
> * [Roles & Capabilities](https://mail-bank.tech-banker.com/backend-demos/roles-capabilities/)
> * [System Information](https://mail-bank.tech-banker.com/backend-demos/system-information/)

> #### **User Guide - Mail Bank**

> * [Installation](https://mail-bank.tech-banker.com/documentation/installation/)
> * [Email Setup](https://mail-bank.tech-banker.com/documentation/email-setup/)
> * [Test Email Screen](https://mail-bank.tech-banker.com/documentation/test-email/)
> * [Connectivity](https://mail-bank.tech-banker.com/documentation/connectivity-test/)
> * [Email Logs](https://mail-bank.tech-banker.com/documentation/email-logs/)
> * [Plugin Settings](https://mail-bank.tech-banker.com/documentation/plugin-settings/)
> * [Roles & Capabilities](https://mail-bank.tech-banker.com/documentation/roles-capabilities/)
> * [System Information](https://mail-bank.tech-banker.com/documentation/system-information/)

> #### **List of SMTP Servers (Outgoing)**

> * **Gmail SMTP Details** :- Host: smtp.gmail.com - Secure(SSL) - Port(465)
> * **Gmail SMTP Details** :- Host: smtp.gmail.com - Secure(TLS) - Port(587)
> * **Outlook.com SMTP Details** :- Host: smtp-mail.outlook.com - Secure(TLS) - Port(587)
> * **Office365.com SMTP Details** :- Host: smtp.office365.com - Secure(TLS) - Port(587)
> * **Hotmail.com SMTP Details** :- Host: smtp.live.com - Secure(TLS) - Port(587)
> * **Yahoo Mail SMTP Details** :- Host: smtp.mail.yahoo.com  - Secure(TLS) - Port(587)
> * **Yahoo Mail SMTP Details** :- Host: smtp.mail.yahoo.com  - Secure(SSL) - Port(465)
> * **Yahoo Mail Deutschland SMTP Details** :- Host: smtp.mail.yahoo.com - Secure(SSL) - Port(465)
> * **Yahoo Mail Plus SMTP Details** :- Host: plus.smtp.mail.yahoo.com - Secure(SSL) - Port(465)
> * **AOL.com SMTP Details** :- Host: smtp.aol.com - Secure(TLS) - Port(587)
> * **AT&T SMTP Details** :- Host: smtp.att.yahoo.com - Secure(SSL) - Port(465)
> * **NTL @ntlworld.com** :- Host: smtp.ntlworld.com - Secure(SSL) - Port(465)
> * **BT Connect** :- Host: smtp.btconnect.com -  No-Encryption - Port(25)
> * **BT Openworld** :- Host: mail.btopenworld.com - No-Encryption - Port(25)
> * **BT Internet** :- Host: mail.btinternet.com - No-Encryption - Port(25)
> * **Orange** :- Host: smtp.orange.net - No-Encryption - Port(25)
> * **Orange UK** :- Host: smtp.orange.co.uk - No-Encryption - Port(25)
> * **Wanadoo UK** :- Host: smtp.wanadoo.co.uk - No-Encryption - Port(25)
> * **Comcast** :- Host: smtp.comcast.net - No-Encryption - Port(587)
> * **Yahoo Mail AU/NZ** :- Host: smtp.mail.yahoo.com.au - Secure(SSL) - Port(465)
> * **O2 Deutschland** :- Host: mail.o2online.de -  No-Encryption - Port(25)
> * **zoho Mail** :- Host: smtp.zoho.com - Secure(SSL) - Port(465)
> * **T-Online Deutschland** :- Host: securesmtp.t-online.de - Secure(TLS) - Port(587)
> * **1&1 (1and1)** :- Host: smtp.1and1.com - Secure(TLS) - Port(587)
> * **1&1 Deutschland** :- Host: smtp.1und1.de - Secure(TLS) - Port(587)
> * **Verizon** :- Host: outgoing.verizon.net - Secure (SSL) - Port(465)
> * **Verizon (Yahoo hosted)** :- Host: outgoing.yahoo.verizon.net - No-Encryption - Port(587)
> * **Mail.com** :- Host: smtp.mail.com - Secure(SSL) - Port(465)
> * **GMX.com** :- Host: smtp.gmx.com - Secure(SSL) - Port(465)
> * **Yahoo Mail UK** :- Host: smtp.mail.yahoo.co.uk - Secure(SSL) - Port(465)
> * **Airmail** :- Host: smtp.airmail.net - Secure(SSL) - Port(465)
> * **Bluewin.ch** :- Host: smtpauth.bluewin.ch - Secure(SSL) - Port(465)
> * **Eartlink.net** :- Host: smtpauth.earthlink.net - Secure(SSL) - Port(587)
> * **iCloud Mail** :- Host: smtp.mail.me.com - Secure(SSL) - Port(587)
> * **Rocketmail** :- Host: smtp.mail.yahoo.com - Secure(SSL) - Port(465)
> * **Rogers** :- Host: smtp.broadband.rogers.com - Secure(SSL) - Port(465)
> * **Ameritech.net** :- Host: smtp.mail.att.net - Secure(SSL) - Port(465)
> * **Pacbell** :- Host: smtp.mail.att.net - Secure(SSL) - Port(465)
> * **Swbell** :- Host: smtp.mail.att.net - Secure(SSL) - Port(465)
> * **Bellsouth** :- Host: smtp.mail.att.net - Secure(SSL) - Port(465)
> * **Flash** :- Host:- smtp.mail.att.net - Secure(SSL) - Port(465)

Note: These SMTP Ports and Settings may be different depending upon your Host Provider. Please contact your Web Server Host for correct details.

### Now Import Settings from Postman SMTP Plugin!

Your Postman SMTP settings are easily automatically imported to Mail Bank when you migrate to Mail Bank.

== SMTP Error Messages ==

= Communication Error [334] make sure the Envelope From Email is the same account used to create the Client ID. =

* This is almost always caused by being logged in to Google/Microsoft/Yahoo with a different user than the one Post is configured to send mail with. Logout and try again with the correct user
* Login to [Webmail](http://www.gmail.com) and see if there is an "Unusual Activity" warning waiting for your attention

= Could not open socket =

* Your host may have installed a firewall between you and the server. Ask them to open the ports.
* Your may have tried to (incorrectly) use SSL over port 587. Check your encryption and port settings.

= Operation Timed out =

* Your host may have poor connectivity to the mail server. Try doubling the Read Timeout.
* Your host may have installed a firewall (DROP packets) between you and the server. Ask them to open the ports.
* Your may have tried to (incorrectly) use TLS over port 465. Check your encryption and port settings.

= Connection refused =

Your host has likely installed a firewall (REJECT packets) between you and the server. Ask them to open the ports.

= 503 Bad sequence of commands =

You configured TLS security when you should have selected no security.

= XOAUTH2 authentication mechanism not supported =

You may be on a Virtual Private Server that is [playing havoc with your communications](https://wordpress.org/support/topic/oh-bother-xoauth2-authentication-mechanism-not-supported?replies=9). Jump ship.

= OAuth 2.0 Features =

* Supports the proprietary OAuth 2.0 implementations of Gmail, Hotmail and Yahoo
* Fire-and-forget delivery continues even if your password changes
* Gmail: By combining OAuth2 and the Gmail API, Post can deliver where other plugins can not

== Mail ends up in the Spam folder ==

To avoid being flagged as spam, you need to prove your email isn't forged. On a custom domain, its up to YOU to set that up:

* Ensure you are using the correct SMTP server with authentication - the correct SMTP server is the one defined by your email service's SPF record
* If you use a custom domain name for email, add an [SPF record](http://www.openspf.org/Introduction) to your DNS zone file. The SPF is specific to your email provider, for example [Google](https://support.google.com/a/answer/33786)
* If you use a custom domain name for email, add a DKIM record to your DNS zone file and upload your Domain Key (a digital signature) to, for example [Google]((https://support.google.com/a/answer/174124?hl=en))

There are lot of features also available in Premium Editions, you can check before downloading & purchasing.
Click [here](https://mail-bank.tech-banker.com/) for Mail Bank Premium Editions.

Mail Bank redirects you to a Welcome Screen on Activation of the Plugin and asks you to either Skip or Opt-In for Non Sensitive  Information about your Website.

In case of Skip, we send the following information to our server at http://stats.tech-banker-services.org/

* Site URL, WordPress Language used
* Status of Plugin at Activation, De-activation, Uninstall

In case of an Opt-In, we send the following information to our server at http://stats.tech-banker-services.org/

* Name and Email Address
* Site URL, WP Version, PHP Info, Plugins & Themes Info
* Display Updates & Announcements
* Status of Plugin at Activation, De-activation, Uninstall

### Mail Bank is the best WP SMTP Plugin available!

= Translate this Plugin =

If you can help us with translation to some other language please contact us at [support@tech-banker.com]

We're really appreciate it!

= Technical Support =

Dear users, our plugins are available for free download. If you have any questions or recommendations regarding the functionality of our plugins, please feel free to contact us.

If you think, that you found a bug in our plugin or have any question contact us at [support@tech-banker.com](mailto:support@tech-banker.com)

Please use the support forum on WordPress.org only for this free Standard version of the plugin.

For the Premium Edition there is a separate support package available. Please do not use the WordPress.org support forum for questions about the Premium Edition.

= Contact Us =

* [https://mail-bank.tech-banker.com/contact-us](https://mail-bank.tech-banker.com/contact-us/)

== Installation ==

### Minimum requirements.
*   WordPress 3.6+
*   PHP 5.3.9+
*   MySQL 5.x

### Performing a new installation

After downloading the ZIP file,

1. Log in to the administrator panel.
2. Go to Plugins Add > New > Upload.
3. Click "Choose file" ("Browse") and select the downloaded zip file.

*For Mac Users*
*Go to your Downloads folder and locate the folder with the plugin. Right-click on the folder and select Compress. Now you have a newly created .zip file which can be installed as described here.*

1. Click "Install Now" button.
2. Click "Activate Plugin" button for activating the plugin.

If any problem occurs, please contact us at [support@tech-banker.com](mailto:support@tech-banker.com).

== Frequently Asked Questions ==

= What are Configuration Settings ? =

It allows the users to configure the settings easily to send Emails.

= What does Override Authentication do? =

It allows the users to override the From Name and From Email Parameters.

= What are the Different Mailer Types available in Mail Bank? =

User can choose either PHP mail() function or SMTP for sending Emails.

= What are Email Logs Entries ? =

You can view detailed records of logged emails such as Date/Time, Debugging Output, Email To, Subject and Status.

= What is a Debug Mode ? =

You can enable or disable the debug mode to get the debugging output of logged emails.

= What are the different Encryption  Methods available in Mail Bank? =

This Plugin provides the users two types of Encryption such as SSL (Secure Sockets Layer) and TLS (Transport Layer Security).

= What does Authentication do ? =

Users can authenticate either by choosing username and Password or Oauth which requires both Client ID and Security Key.

= Does Mail Bank remove Tables At Uninstall ? =

You can configure the settings to drop Tables from database when uninstalled in Other Settings.

= What is Debugging Output ? =

It allows the users to view the debugging output of logged emails.

== Screenshots ==

1. Email Setup - Basic Info Screen
2. Email Setup - PHP Mailer Account Setup Screen
3. Email Setup - SMTP Account Setup Screen
4. Email Setup - Confirm Screen
5. Test Email Screen
6. Connectivity Test Screen
7. Email Logs Screen
8. Plugin Settings Screen
9. Roles & Capabilities Screen
10. System Information Screen

== Changelog ==

= 3.0.49 =

* TRANSLATIONS: Indonesian Language

= 3.0.48 =

* FIX: From Name Bug in emails

= 3.0.47 =

* FIX: Minor Bugs
* TRANSLATIONS: Persian (Farsi) Language
* TRANSLATIONS: Portuguese Language

= 3.0.46 =

* FIX: Minor Bugs
* FIX: 100% PHP Compatibility
* FIX: 100% WP Tide Compliance

= 3.0.45 =

* TRANSLATIONS: Arabic Language
* FIX: Office 365 & Outlook Connectivity Issues
* FIX: PHP Compatibility Issues
* FIX: WordPress Compatibility Issues

= 3.0.44 =

* TRANSLATIONS: Polish Language
* TRANSLATIONS: Vietnamese Language

= 3.0.43 =

* TRANSLATIONS: Japanese Language
* FIX: Dashboard Widget Bugs

= 3.0.42 =

* FIX: Dashboard Widget Bugs

= 3.0.41 =

* TRANSLATIONS: French Language
* TRANSLATIONS: German Language
* TRANSLATIONS: Italian Language

= 3.0.40 =

* FIX: Major Bugs
* FIX: PHP Compatibility Issues
* FIX: WordPress Compatibility Issues
* TWEAK: Compliance with WP Tide
* TRANSLATIONS: Dutch Language
* TRANSLATIONS: French Language
* TRANSLATIONS: Brazilian Portuguese Language
* TRANSLATIONS: Russian Language
* TRANSLATIONS: Spanish Language
* TRANSLATIONS: Simplified Chinese Language
* TRANSLATIONS: Turkish Language

= 3.0.38 =

* FIX: Bug with Jet Pack Contact Forms
* FIX: Wrong Mime Types

= 3.0.37 =

* FIX: Timeout Issue
* FIX: Memory Exception

= 3.0.36 =

* TWEAK: Strict Compliance in Mail Bank as per PHP Standards.
* TWEAK: Strict Compliance in WordPress SMTP Plugin as per WordPress Standards.
* TWEAK: Obsolete Code Removed

= 3.0.33 =

* TWEAK: Feedback Request on De-Activation of Plugin

= 3.0.32 =

* TWEAK: Minor Changes in Plugin Translation
* TWEAK: Bulk Resend Email in Premium Editions

= 3.0.31 =

* FIX: Changes in Admin Notices

= 3.0.29 =

* FEATURE: Message to Recommend Gallery Bank & Contact Bank plugins

= 3.0.28 =

* FEATURE: Import Email Settings from POSTMAN plugin if already installed.
* FEATURE: Import Authentication Settings from POSTMAN plugin if already installed.
* FEATURE: Add Additional Headers Feature Added
* FEATURE: Email Address Textbox for User Input at Wizard Page
* FIX: Minor Bugs

= 3.0.27 =

* FIX: Multipart Mime Email were not sent.

= 3.0.26 =

* FIX: Email Logs Missing from MyISAM Databases.

= 3.0.25 =

* TWEAK: Improved Messages for Errors when configuring Mail Bank

= 3.0.24 =

* TWEAK: Ability to remove Mail Bank from Top Admin Bar Menu

= 3.0.23 =

* FIX: Uninstall Bug for Dropping of Tables in case of a Multisite

= 3.0.22 =

* TWEAK: Database Optimized to reduce Query Execution Time
* FIX: Minor Bugs

= 3.0.19 =

* FIX: Security Vulnerability Issues

= 3.0.18 =

* FIX: Major Confliction with Admin Menu Editor Plugin
* FIX: Broken Links
* FIX: Pricing Page Removed from Page
* FIX: Minor Bugs
* TWEAK: CSS Optimized

= 3.0.17 =

* FIX: Broken Link
* FIX: Confliction with Admin Menu Editor Plugin

= 3.0.16 =

* TWEAK: Pricing Tables Changed
* TWEAK: Feedback Removed
* TWEAK: WordPress.org Support Forum Link Added

= 3.0.15 =

* TWEAK: Could Not Open Socket Solution Provided
* TWEAK: Connection Timeout Solution Provided
* TWEAK: Could No Inititate mail() Function Solution Provided

= 3.0.14 =

* FIX: Wizard Bugs
* FIX: Uninstall PLugin Bugs

= 3.0.13 =

* TWEAK: Freemius Code Removed
* TWEAK: Wizard Page Added
* TWEAK: Support Forum Link Added

= 3.0.12 =

* FIX: CSS Conflictions
* TWEAK: New & Easy Gallery UI
* TWEAK: Premium Version Links Removed
* TWEAK: Banners Removed
* TWEAK: Unwanted JS/CSS Files Removed

= 3.0.11 =

* FIX: Confliction with JetPack Contact Module Fixed
* FIX: Major Bugs
* TWEAK: Code Optimized

= 3.0.10 =

* FIX: Major Bugs
* TWEAK: Code Optimized
* TWEAK: Overview Page Added
* TWEAK: Wizard Page Removed

= 3.0.9 =

* FIX: Already Sent Headers Bug Fixed
* TWEAK: Code Optimized

= 3.0.8 =

* TWEAK: Links Added
* FIX: unserialize changed to maybe_unserialize
* TWEAK: Code Optimized
* TRANSLATIONS: Language Updated - Vietnamese

= 3.0.7 =

* TWEAK: Unused Files Removed
* TWEAK: Code Optimized

= 3.0.6 =

* FIX: Proper Sanitization, Escaping, Validation of all Post Calls
* TWEAK: Unused Files Removed
* TWEAK: Code Optimized
* TRANSLATIONS: New Language Added - Hungarian
* TRANSLATIONS: New Language Added - Swedish
* TRANSLATIONS: New Language Added - Vietnamese

= 3.0.5 =

* FIX: Proper Sanitization, Escaping, Validation of all Post Calls
* FIX: Uninstall File Fatal Error
* FIX: Error Reporting in file Removed
* FIX: Auto Updates Removed from Translations


= 3.0.4 =

* FIX: Proper Sanitization, Escaping, Validation of all Post Calls
* FIX: Removal of all function_exists, class_exists, typeof from all the files.
* FIX: Uninstall File moved to root folder and changes done as per wordpress guidelines.
* FIX: Error Reporting in file Removed
* FIX: Auto Updates Removed
* FIX: Curl Calls Removed

= 3.0.3 =

* FIX: Code Removed from Skip Action Hook on Wizard Page
* FIX: Code Removed from De-activation Hook in case of Skipped Wizard Page
* FIX: Code Removed from Uninstall Hook in case of Skipped Wizard Page
* FIX: Obsolete Code Removed
* FIX: Obsolete Code Removed

= 3.0.1 =

* TWEAK: Translations File updated
* FIX: Major Bugs Fixed
* FIX: Obsolete Code Removed

= 3.0.0 =

* Major Version Release
* TWEAK: Database Optimized
* TWEAK: Layouts Changed
* TWEAK: Email Logs Modified
* TWEAK: Email Logs Filters Data for 1 Month now
* TWEAK: Authentication type 'None' added
* TWEAK: Install Script Modified
* TWEAK: Code optimized
* TWEAK: Screenshots Changed
* TWEAK: CSS Improved
* TWEAK: Screenshots Added
* TWEAK: Translations File updated
* TWEAK: Wizard Page Added

* For Logs Prior to Version 3.0.0, please click [here](https://mail-bank.tech-banker.com/old-change-log.txt)

== Upgrade Notice ==

* WP Mail Bank is now 100% Compatible with PHP Versions >= 5.4
