ssh -t -t $1@jpa "cd /home/jpa/www/; cvs -d \":pserver:${1}:${2}@jpa:/home/jpa/cvsroot\" checkout jpa;"
firefox $3
