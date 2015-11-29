#
# Regular cron jobs for the php-yaml package
#
0 4	* * *	root	[ -x /usr/bin/php-yaml_maintenance ] && /usr/bin/php-yaml_maintenance
