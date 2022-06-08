# Mage2 Module Chinhis TestPlugin

    ``chinhis/module-testplugin``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
testAttribute

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Chinhis`
 - Enable the module by running `php bin/magento module:enable Chinhis_TestPlugin`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require chinhis/module-testplugin`
 - enable the module by running `php bin/magento module:enable Chinhis_TestPlugin`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Plugin
	- afterLogout - Magento\Backend\Model\Auth > Chinhis\TestPlugin\Plugin\Magento\Backend\Model\Auth

 - Plugin
	- beforeLogout - Magento\Backend\Model\Auth > Chinhis\TestPlugin\Plugin\Magento\Backend\Model\Auth

 - Plugin
	- aroundLogout - Magento\Backend\Model\Auth > Chinhis\TestPlugin\Plugin\Magento\Backend\Model\Auth


## Attributes



