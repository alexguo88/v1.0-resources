ACP modules
===========

active_members.php
------------------

This module allows you to see a list of active members in the past `x` hours, along with the time of their last pageview.

basic-acp
---------

A simple control panel for managing various content types in UseBB 0.x. It was developed at the time the ACP was not yet fully completed.

**Note:** it is very likely issues exist within this code, or the code does not work anymore on recent PHP versions!

Original description: "This is a basic Administrative GUI for Categories, Forums, Members, and Moderators."
Author: [robot-00](http://sourceforge.net/users/robot-00/)

dnsbl_test.php
--------------

This module allows an administrator to test a number of DNSBL servers given an IP address. A small report is made with notice of positive hits and query time for each server.

ipbans_export.php
-----------------

This ACP feature can export banned IP addresses in a given plain text format. E.g. export your IP bans for an Apache configuration or `.htaccess` file (`deny from %s`).

Next to this, all currently banned IP addresses can be removed in one step.

merge_topics.php
----------------

This ACP module allows an administrator to merge two topics into one single topic. The posts of topic A are transferred to topic B, while keeping the statistics and without breaking the forum. This also works for topics in different forums.

set_template.php
----------------

This module allows the administrator to set the used template set for all his members to a specified one.

Note, this does not "lock" the template set, users may still change the template set in their panel afterwards.

translation-helper.php
----------------------

The original translation helper ACP module that was distributed with UseBB until 1.0 final.