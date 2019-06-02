#!/bin/sh
cmdGit=$(which git)
cd /srv/www/xxxxxxxx # Le repertoire de ton depot git
unset GIT_DIR
#/usr/bin/git pull origin master 
$cmdGit pull origin master 
