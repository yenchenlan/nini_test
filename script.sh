#!/bin/bash

#echo "woolala-1"
#echo "woolala-1" > test.txt
#chmod 777 test.txt

echo "remote: git@github.com:yenchenlan/nini_test.git"

#REPO_URL="https://${GIT_TOKEN}@github.com/yenchenlan/nini_test.git"
#git config --global --add safe.directory /var/www/html/classroom/chester/nini_test

branch="$1"

#pushd nini_test 2>&1 && 
#	git remote set-url origin ${REPO_URL} 2>&1 &&
git pull 2>&1 
git checkout $branch 2>&1 

