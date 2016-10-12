# Customizable Robots for CMS Pages in Magento 2.x

This is a simple extension which adds the ability to set a custom robots to each cms page in the backend.

### Requirements

The package works with Magento 2.0.x and 2.1.x.


### Installation

1. Copy the whole "Codealist" directory into your /project-directory/app/code/
2. From the terminal run: php bin/magento module:enable Codealist_CmsPageRobots
3. php bin/magento setup:upgrade
4. php bin/magento cache:clean

And that should be it. You should see a textbox added while you edit/create a CMS Page.
