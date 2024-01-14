#!/bin/bash

# Funktion, die den Hilfetext ausgibt
print_help() {
  echo "Joomla Koreanisch Sprachversion packen"
  echo ""
  echo "Verwendung: bash joomla4.sh -v 4.4.2v1 -d /Users/cappu/_WWW/_joomla/languages/ko-KR"
  echo ""
  echo "IMPORTANT: Update data in the following files:"
  echo "- source_static/joomla4/pkg_ko-KR.xml"
  echo "- source_static/joomla4/script.php"
  echo ""
  echo "Parameter:"
  echo ""
  echo "  -h HELPT. Help text"
  echo "  -v VERSION   Joomla versions number, i. e. -v 4.4.2v1"
  echo "  -d DOCUMENT_ROOT  path to the document root, i. e. -d /Users/cappu/_WWW/_joomla/languages/ko-KR"
  echo ""

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
  echo "Error: Please pass a version number, i. e. -v 4.4.2."
  print_help
  exit 1
fi

# Setzen Sie 'document_root' auf einen Standardwert, wenn es nicht gesetzt ist
if [ -z "$document_root" ]; then
  echo "Error: Please pass the document_root, i. e. -d /Users/cappu/_WWW/_joomla/languages/ko-KR"
  print_help
  exit 1
fi

path_to_source="/source/joomla_v4/translations/package/ko-KR"

# 1.1 pkg_ko-KR.xml: copy pkg_ko-KR.xml to source folder
cp "${document_root}/source_static/joomla4/pkg_ko-KR.xml" "${document_root}${path_to_source}/pkg_ko-KR.xml"

# 1.2 script.php: copy script.php to source folder
cp "${document_root}/source_static/joomla4/script.php" "${document_root}${path_to_source}/script.php"

# 1.3 Change to source folder 
cd "${document_root}${path_to_source}"

# 1.4 zip the files inside the source directory
zip -9 -v -r "./ko-KR_joomla_lang_full_${version}.zip" "./"

# 1.5 copy the zip file to the document root
mv "./ko-KR_joomla_lang_full_${version}.zip"  "${document_root}"