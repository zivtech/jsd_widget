# Jira Service Desk Cloud Widget
A Drupal 8 module that enables a Jira Service Desk Cloud Widget on a Drupal 8 site for QA, Support, or Feature Requests.

## Features
- Configurable `data-key` value to easily map to a Jira Service Desk Cloud Project Widget on Jira Cloud.
- Display the JSD Cloud Widget for specific user roles using Blocks visibility settings.

## Installation
- Configure a [login-free portal](https://confluence.atlassian.com/servicedeskcloud/blog/2017/04/introducing-the-login-free-portal-for-jira-service-desk-cloud) on your Jira Service Desk Cloud instance so customers can view the widget.
- Download and install the JSD Widget module.
- Goto the Block Layout page and place the **Jira Service Desk Widget block** in any region.
- Configure the **Jira Service Desk Widget block**.
- Add the `data-key` value from the Jira Service Desk Cloud Widget project's code snippet to the **Data Key** field.
- Configure block visibility settings for user roles that should be able to view the JSD Widget block.
- Save the block settings.
- Profit.
