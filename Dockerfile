FROM ubuntu:16.04



#Set working directory
#WORKDIR /var/www/html


RUN apt-get update

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*



RUN apt-get update

RUN apt-get install software-properties-common -y
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
#RUN  add-apt-repository -y ppa:ondrej/php
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y nginx php7.1-fpm supervisor aspell graphviz php7.1-curl php7.1-gd php7.1-intl php7.1-ldap php7.1-mysql php7.1-pspell php7.1-xml php7.1-xmlrpc php7.1-zip nano curl mysql-client


RUN chown www-data:www-data /var/www/html
RUN chmod u+w /var/www/html

ENV nginx_vhost /etc/nginx/sites-available/default
ENV php_conf /etc/php/7.1/fpm/php.ini
ENV nginx_conf /etc/nginx/nginx.conf
ENV supervisor_conf /etc/supervisor/supervisord.conf



COPY default ${nginx_vhost}
RUN sed -i -e 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' ${php_conf} && \
    echo "\ndaemon off;" >> ${nginx_conf}


COPY supervisord.conf ${supervisor_conf}

RUN mkdir -p /run/php && \
    chown -R www-data:www-data /var/www/html && \
    chown -R www-data:www-data /run/php
VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]


# Expose port 9000 and start php-fpm server
EXPOSE 9000 80 443 3306 

VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]

ADD aspire /aspire
RUN cp -r /aspire /var/www/html/aspire && chmod -R 0777 /var/www/html/aspire

#RUN chmod -r 0777 /var/www/html



ADD moodledata /moodledata
RUN cp -r /moodledata /var/moodledata

RUN chown -R www-data /var/moodledata

RUN chmod -R 0777 /var/moodledata

#WORKDIR /

ADD start.sh /start.sh
CMD ["./start.sh"]



