### Translation Joomla Korean

## 1. Basic Steps

### 1.1 Download the files from Crowdin

https://joomla.crowdin.com/u/projects/18/l/ko HALLLLO Moin

### 1.2 Remove the files in the /scoure folder and copy the files from the Crowdin folder into the /source folder

rm -rf /Users/cappu/\_WWW/\_joomla/languages/ko-KR/source/\*

### 1.3 Update static files

/source_static/joomla5/pkg_ko-KR.xml
/source_static/joomla5/script.php

### 1.4 Create Joomla 5 package

bash joomla5.sh -v 5.0.2v1 -d /Users/cappu/\_WWW/\_joomla/languages/ko-KR

### 1.5 Create Joomla 4 package

bash joomla5.sh -v 4.4.2v1 -d /Users/cappu/\_WWW/\_joomla/languages/ko-KR
