# lowDns
Simple home made ip storer

Require:
  - SQL database
  - PHP

Pre:
  - create "lowDns" database

On Linux client with SSL certificate:
  - wget -qO- https://yourhost/lowDns/index.php?device=devicename --no-check-certificate &> /dev/null

On Linux client without SSL certificate:
  - wget -qO- http://yourhost/lowDns/index.php?device=devicename &> /dev/null

change "yourhost" with your host ip and "devicename" you a identification name you prefer

Tips:
  a good practice is to hourly schedule a script with wget to your host having ip updated to last hour 
