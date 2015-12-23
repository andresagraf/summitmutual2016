# Wordpress Starter 0.1

Deploy desarrollo

1 - En windows configurar archivo host con:

C:\Windows\System32\drivers\etc
127.0.0.1 local.summit2016.cl

2 - Configurar carpeta de localhost con apache en httpd.conf:


<VirtualHost local.summit2016.cl>
DocumentRoot C:\xampp\htdocs\summit2016
ServerName local.summit2016.cl
ServerAlias local.summit2016.cl
</VirtualHost>

3 - Re iniciar servicios

4 - Crear BBDD y configurar archivo local-config.php en base a local-config-sample.php