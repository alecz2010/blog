@echo off
SET pbl=..\..\public
cls

:: generic css
echo Building generic.gz.css
java -jar yuicompressor-2.4.8pre.jar %pbl%\css\generic\build\generic.css -o %pbl%\css\generic\build\generic.min.css
gzip.exe -f -n -k -7 %pbl%\css\generic\build\generic.min.css
del %pbl%\css\generic\build\generic.min.css
move %pbl%\css\generic\build\generic.min.css.gz %pbl%\css\generic\generic.gz.css

:: generic js
echo Building generic.gz.js
SET pth=%pbl%\js\generic
merger %pth%\build\generic.js %pth%\src\ModalBuilder.js %pth%\src\Contact.js %pth%\src\Login.js %pth%\src\Registration.js
java -jar compiler.jar --compilation_level SIMPLE_OPTIMIZATIONS --language_in ECMASCRIPT5 --js %pth%\build\generic.js --js_output_file %pth%\build\generic.min.js
gzip.exe -f -n -k -7 %pth%\build\generic.min.js
del %pth%\build\generic.min.js
move %pth%\build\generic.min.js.gz %pth%\generic.gz.js

pause