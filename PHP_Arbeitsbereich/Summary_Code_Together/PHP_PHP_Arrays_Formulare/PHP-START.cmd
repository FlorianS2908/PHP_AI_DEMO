@echo off
setlocal
cd /d "%~dp0"
if defined PHP_BIN goto check
if exist "C:\xampp\php\php.exe" (
  set "PHP_BIN=C:\xampp\php\php.exe"
) else (
  set "PHP_BIN=php"
)
:check
"%PHP_BIN%" -v >nul 2>&1
if errorlevel 1 (
  echo PHP wurde nicht gefunden.
  echo XAMPP installieren oder PHP_BIN auf den Pfad zu php.exe setzen.
  echo Beispiel: set "PHP_BIN=D:\xampp\php\php.exe"
  pause
  exit /b 1
)
"%PHP_BIN%" -r "exit(PHP_VERSION_ID >= 80000 ? 0 : 1);"
if errorlevel 1 (
  echo Dieses Material ist fuer PHP 8 oder neuer vorbereitet.
  pause
  exit /b 1
)
echo.
echo PHP PHP-Demo - lokaler Server, keine Datenbank noetig.
echo Im Browser oeffnen: http://127.0.0.1:8080/
echo Fenster offen lassen. Beenden mit Strg+C.
echo Falls Port 8080 belegt ist, den Port unten und in der Adresse anpassen.
echo.
"%PHP_BIN%" -d session.auto_start=0 -S 127.0.0.1:8080 -t "%CD%"
echo Der PHP-Server wurde beendet oder konnte nicht starten.
pause
endlocal
