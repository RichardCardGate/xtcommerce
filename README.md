![CardGate](https://cdn.curopayments.net/thumb/200/logos/cardgate.png)

# CardGate module for xtCommerce

[![Total Downloads](https://img.shields.io/packagist/dt/cardgate/xtcommerce.svg)](https://packagist.org/packages/cardgate/xtcommerce)
[![Latest Version](https://img.shields.io/packagist/v/cardgate/xtcommerce.svg)](https://github.com/cardgate/xtcommerce/releases)
[![Build Status](https://travis-ci.org/cardgate/xtcommerce.svg?branch=master)](https://travis-ci.org/cardgate/xtcommerce)

## Support

This plugin supports xtCommerce versions **4** and **5**.

## Preparation

The usage of this module requires that you have obtained CardGate RESTful API credentials.
Please visit [My Cardgate](https://my.cardgate.com/) and retrieve your RESTful API username and password, or contact your accountmanager.

## Installation

1. Download the **xtcommerce.zip** file to your desktop.

2. Unzip the file, and upload the contents of the **xtcommerce** folder to the **root** of your website.

## Configuration

1. Go to the **admin** of your website, and choose **Plugins, plugins uninstalled**.

2. Scroll to Module **Payment** and select **CardGate** plug-in. (Possibly you may find it on the next page)..

3. Click on **Run** at **Actions** to install the plug-in.

4. Repeat this step for all the CardGate **Payment methods** you want to make available in your shop.

5. The installed plug-ins are being shown at **plugins installed**.

6. Check mark the CardGate plug-ins and choose **enable selection** to activate them.

5. In the menu on the left choose **Configuration** and then **method of payment**.

6. Select the CardGate plug-in and click on **edit**.

7. Now enter the **Merchant API key**, **Merchant ID**, **Hash key** and the **Site ID**,  
   which has been sent via the ticket "Checkout installation" in [My Cardgate](https://my.cardgate.com/).

8. Also enter the other values if necessary and **save** the settings.  
   **REMARK:** Do **not activate** the CardGate plug-in since it is only used to save the settings that are used by the CardGate Payment methods.

9. Check mark the **CardGate Payment methods** you wish to use and click **enable selection**.

10. When you are finished testing go to **Configuration** in the **CardGate** module and switch **Test Mode** from **true** to **false** and save it (**Save**)

## Requirements

No further requirements.