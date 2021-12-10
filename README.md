# Magento 2.x Extension | ManishJoy_AdminCli

    ``manishjoy/module-admincli-m2``

 - [Main Functionalities](#main-functionalities)
 - [Screenshots](#screenshots)
 - [Installation](#installation)
 - [Usage](#usage)
 - [Prerequisites](#prerequisites)
 - [Support The Work](#liked-my-work)
 - [Feedback and Support](#feedback-and-support)


## Main Functionalities

#### This Extension allows admin user to run CLI commands from Admin Panel

 - Now, no need to go through the complexities of connecting SSH/Terminal
 - Uses `exec` php function
 - Very easy installation and usage
 - I recommend to use it ONLY on dev environments as it is not securely to run exec.

## Screenshots

<img src="https://i.ibb.co/2hmxfys/Admin-Command-Line.png" alt="Admin Command Line" title="Admin Command Line">

## Installation
#### in production please use the `--keep-generated` option

 - Unzip the zip file in `app/code/ManishJoy/AdminCli`
 - Enable the module by running `php bin/magento module:enable ManishJoy_AdminCli`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

## Usage

- Navigate to **System :arrow_right: Tools :arrow_right: Admin Command Line**
- Enter your password and the Magento command and then click **_Enter_**
- To know more about Magento 2.x commands, <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands.html">visit</a>

## Prerequisites

### Use the following table to verify you have the correct prerequisites to install this Extension.

<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
	<tr>
		<td>Apache 2.2 or 2.4</td>
		<td>Ubuntu: <code>apache2 -v</code><br>
		CentOS: <code>httpd -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/apache.html">Apache</a></td>
	</tr>
	<tr>
		<td>PHP 7.1.x or higher</td>
		<td><code>php -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-ubuntu.html">PHP Ubuntu</a><br><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-centos.html">PHP CentOS</a></td>
	</tr>
	<tr>
      <td>MySQL 5.6.x</td>
	   <td><code>mysql -u [root user name] -p</code></td>
	   <td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/mysql.html">MySQL</a></td>
	</tr>
   <tr>
      <td>Magento 2.x</td>
	   <td><code>bin/magento --version</code></td>
	   <td><a href="https://devdocs.magento.com">Magento</a></td>
	</tr>
</tbody>
</table>


## Liked My Work?

<a href="https://www.paypal.me/manishjoy" rel="nofollow"><img height="36" src="https://manishjoy.github.io/img/coffee-btn-image.png" border="0" alt="Buy Me a Coffee" data-canonical-src="https://manishjoy.github.io/img/coffee-btn-image.png" style="max-width:100%;"></a>

--- OR ---

<a href='https://www.patreon.com/manishjoy' target='_blank'><img src='https://i.ibb.co/rHdTFtj/patreon-btn.jpg' width='200' border='0' alt='SUPPORT ME ON PATREON' /></a>

## Feedback and Support

 - <a href="https://www.manishjoy.com/">https://www.manishjoy.com</a>

 - <a href="mailto:support@manishjoy.com">support@manishjoy.com</a>

## Tutorials and Blogs

 - <a href="https://blog.manishjoy.com/magento-development-guide/">https://blog.manishjoy.com/magento-development-guide/</a>
