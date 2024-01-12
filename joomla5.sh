#!/bin/bash

# Funktion, die den Hilfetext ausgibt
print_help() {
  echo "Joomla Koreanisch Sprachversion packen"
  echo ""
  echo "Verwendung: bash joomla5.sh"
  echo ""
  echo "IMPORTANT: Update data in the following files:"
  echo "- source_static/joomla5/pkg_ko-KR.xml"
  echo "- source_static/joomla5/script.php"
  echo ""
  echo "Parameter:"
  echo ""
  echo "  -h HELPT. Help text"
  echo "  -v VERSION   Joomla versions number, i. e. -v 5.0.2v1"
  echo "  -d DOCUMENT_ROOT  path to the document root, i. e. -d /Users/cappu/_WWW/_joomla/languages/ko-KR"
  echo ""
  echo "Beispiel:"
  echo "  bash joomla5.sh 5.0.2"
}

# Verarbeiten Sie die Parameter mit getopts
while getopts "h:v:d:" opt; do
  case ${opt} in
    h )
      print_help
      exit 0
      ;;
    v )
      version=$OPTARG
      ;;
    d )
      document_root=$OPTARG
      ;;
    \? )
      echo "Ungültige Option: -$OPTARG" 1>&2
      exit 1
      ;;
  esac
done

# Überprüfen Sie, ob die 'version' Variable gesetzt ist
if [ -z "$version" ]; then
  echo "Error: Please pass a version number, i. e. -v 5.0.2."
  print_help
  exit 1
fi

# Setzen Sie 'document_root' auf einen Standardwert, wenn es nicht gesetzt ist
if [ -z "$document_root" ]; then
  echo "Error: Please pass the document_root, i. e. -d /Users/cappu/_WWW/_joomla/languages/ko-KR"
  print_help
  exit 1
fi


# 2.2 Remove the files in the /target folder
rm -rf "${document_root}/target/joomla5/*"

# 2.3 Change into the target directory!!
cd  "${document_root}/target/joomla5"

# 2.4 admin: zip the files in /source/joomla_v5/translations/package/ko-KR/administrator/language/ko-KR into the file admin_ko-KR.zip inside the /target/joomla5/ directory!
zip -9 -v -r -j ./admin_ko-KR.zip "${document_root}/source/JoomlaV5/joomla_v5/translations/package/ko-KR/administrator/language/ko-KR"  -x "*/.git*" -x "*/.vscode*" -x "*.gitignore" -x "**/.DS_Store" -x "*TODO.TXT" -x "*CHANGELOG.TXT" -x "*composer.json" -x "*composer.lock"

# 2.5 site:
zip -9 -v -r -j ./site_ko-KR.zip "${document_root}/source/JoomlaV5/joomla_v5/translations/package/ko-KR/language/ko-KR"  -x "*/.git*" -x "*/.vscode*" -x "*.gitignore" -x "**/.DS_Store" -x "*TODO.TXT" -x "*CHANGELOG.TXT" -x "*composer.json" -x "*composer.lock"

# 2.6 api:
zip -9 -v -r -j ./api_ko-KR.zip "${document_root}/source/JoomlaV5/joomla_v5/translations/package/ko-KR/api/language/ko-KR"  -x "*/.git*" -x "*/.vscode*" -x "*.gitignore" -x "**/.DS_Store" -x "*TODO.TXT" -x "*CHANGELOG.TXT" -x "*composer.json" -x "*composer.lock"

# 2.7 pkg_ko-KR.xml: Replace version number 
# You need to add your own command here to replace the version number

# 2.8 pkg_ko-KR.xml: copy pkg_ko-KR.xml to the new directory
cp "${document_root}/source_static/joomla5/pkg_ko-KR.xml" "${document_root}/target/joomla5/pkg_ko-KR.xml"

# 2.9 script.php: replace the version number (just for major version number changes)
# You need to add your own command here to replace the version number

# 2.10 script.php: copy the language files to the new directory
cp "${document_root}/source_static/joomla5/script.php" "${document_root}/target/joomla5/script.php"

# 2.10 Change Version Number in following zip and zip the files inside the target directory
cd "${document_root}"
zip -9 -v -r -j "./ko-KR_joomla_lang_full_${version}v1.zip" "${document_root}/target/joomla5"