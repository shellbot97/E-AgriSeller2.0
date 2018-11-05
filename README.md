# E-AgriSeller2.0

server setup steps - 
sudo apt-get update
sudo mkdir -p /var/www/directory_name/<put your code here(codeigniter files)>
cd /etc/apache2/sites-available/
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/local.website_name.com.conf
sudo nano local.website_name.com.conf -> 
change ServerAdmin hitesh.ingale97@gmail.in
			ServerName local.website_name.com
			ServerAlias local.website_name.com
			DocumentRoot /var/www/dir_name
      8.   sudo a2ensite local.website_name.com.conf
      7.   sudo nano /etc/hosts -> 	
127.0.0.1	localhost
127.0.0.1	local.website_name.com                  // add this

       9.   sudo a2dissite 000-default.conf
       10.   sudo service apache2 restart
       11.   cd /etc/apache2
       12.   sudo subl apache2.conf->(add this) -> 	ServerName localhost
<Directory /var/www/website_name/>
AllowOverride All
</Directory>

