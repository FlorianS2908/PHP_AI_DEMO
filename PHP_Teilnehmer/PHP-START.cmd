@echo off
setlocal
cd /d "%~dp0"
set "PHP_EXE=php"
if exist "C:\xampp\php\php.exe" set "PHP_EXE=C:\xampp\php\php.exe"
"%PHP_EXE%" -v >nul 2>&1
if errorlevel 1 (
 echo PHP nicht gefunden. XAMPP-Pfad oder PATH pruefen.
 pause
 exit /b 1
)
echo Nach Serverstart im Browser oeffnen: http://127.0.0.1:8080/
echo Datenbankdienst fuer DB-Beispiele separat starten. Beenden mit Strg+C.
"%PHP_EXE%" -S 127.0.0.1:8080 -t "%CD%"
endlocal
