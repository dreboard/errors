#!bin/bash
CURRENT_IP=$(hostname --ip-address)
INSPI_DEV=172.17.0.2
echo $CURRENT_IP '------------------------------------'
if [[ "$CURRENT_IP" == "$INSPI_DEV" ]]; then
    echo 'Dev area......'
fi
echo 'install xdebug............................................'
    pecl install xdebug
    #touch /var/log/xdebug_remote.log && chmod 755 /var/log/xdebug_remote.log
    echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" >> /usr/local/etc/php/php.ini
    echo "xdebug.remote_host=10.254.254.254" >> /usr/local/etc/php/php.ini
    echo "xdebug.remote_enable=1" >> /usr/local/etc/php/php.ini
    echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/php.ini
    echo "xdebug.profiler_enable=0" >> /usr/local/etc/php/php.ini
    echo "xdebug.profiler_output_dir=/var/www/html/logs/xdebug/profile" >> /usr/local/etc/php/php.ini
    echo "xdebug.profiler_output_name=cachegrind.out" >> /usr/local/etc/php/php.ini
#echo "disable_functions = eval,exec,passthru,shell_exec,system,proc_open,popen,parse_ini_file,highlight_file" >> /usr/local/etc/php/php.ini
#cat   /var/www/html/build/php.ini  >> /usr/local/etc/php/php.ini
a2enmod rewrite && a2enmod headers && service apache2 restart