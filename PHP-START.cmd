@echo off
setlocal
cd /d "%~dp0"
set "PHP_EXE=php"
if exist "C:\xampp\php\php.exe" set "PHP_EXE=C:\xampp\php\php.exe"
"%PHP_EXE%" -v >nul 2>&1
if errorlevel 1 (
 echo PHP nicht gefunden. XAMPP installieren oder PHP zum PATH hinzufuegen.
 pause
 exit /b 1
)
echo Kurs: http://127.0.0.1:8080/
echo Der Kernkurs braucht keine Datenbank. Beenden mit Strg+C.
"%PHP_EXE%" -S 127.0.0.1:8080 -t "%CD%"
endlocal
