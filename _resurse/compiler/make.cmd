@echo off
SET pbl=..\..\public
cls

:: generic css
echo Building generic.gz.css
java -jar yuicompressor-2.4.8pre.jar %pbl%\css\generic\build\generic.css -o %pbl%\css\generic\build\generic.min.css
gzip.exe -f -n -k -7 %pbl%\css\generic\build\generic.min.css
del %pbl%\css\generic\build\generic.min.css
move %pbl%\css\generic\build\generic.min.css.gz %pbl%\css\generic\generic.gz.css
pause