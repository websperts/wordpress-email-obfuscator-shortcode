# WordPress Email Obfuscator Shortcode

This shortcode allows you to obfuscate email addresses in your WordPress project. The obfuscation prevents spam bots (at least most of them) to scan your site for email addresses.

## Installation

1. Download the ZIP
2. Install the plugin in WordPress by either uploading the unzipped plugin folder via (S)FTP or uploading the ZIP directly via the Plugins page in the WordPress back-end
3. Activate the plugin

## Usage

### Example 1

	[email address="hi@example.com"]
	
becomes

	<span class="obfuscated">hi AT example.com DOT com</span>

### Example 2

	[email address="hi@example.com" text="Drop me an email"]

becomes

	<span class="obfuscated" data-text="Drop me an email">hi AT example.com DOT com</span>

## F.A.Q.

### »Can I rename that *AT* and *DOT* stuff?«

Sure. 

	[email address="hi@example.com" text="Drop me an email" at="ÄT" dot="PUNKT"]

## Changelog

* 0.0.1
	* Initial version

## License

Copyright (c) 2014 [websperts](http://websperts.com/)  
Licensed under the MIT license.

See LICENSE for more info.