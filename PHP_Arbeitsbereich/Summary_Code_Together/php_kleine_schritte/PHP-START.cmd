@echo off
setlocal
cd /d "%~dp0"
set "PHP_EXE=php"
if exist "C:\xampp\php\php.exe" set "PHP_EXE=C:\xampp\php\php.exe"
"%PHP_EXE%" -v >nul 2>&1
if errorlevel 1 (
  echo PHP wurde nicht gefunden. XAMPP starten oder den PHP-Pfad anpassen.
  pause
  exit /b 1
)
echo.
echo Lokaler Unterrichtsserver: http://127.0.0.1:8085/
echo Diese Adresse im Browser oeffnen.
echo Fenster offen lassen. Beenden mit Strg+C.
echo Es wird keine Datenbank benoetigt.
echo.
"%PHP_EXE%" -S 127.0.0.1:8085 -t .
if errorlevel 1 pause
endlocal
