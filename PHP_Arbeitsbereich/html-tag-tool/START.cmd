@echo off
setlocal
cd /d "%~dp0"
title HTML-Tag-Tool - lokaler Start
py -3 -c "import sys; sys.exit(sys.version_info < (3, 8))" >nul 2>&1
if not errorlevel 1 goto start_py
python -c "import sys; sys.exit(sys.version_info < (3, 8))" >nul 2>&1
if not errorlevel 1 goto start_python
echo Python 3.8 oder neuer wurde nicht gefunden.
echo Es wird nichts automatisch installiert.
echo.
echo Alternative: Ordner in XAMPP htdocs ablegen, Apache starten und
echo http://localhost/html-tag-tool/index.html im Browser oeffnen.
echo Weitere Hinweise stehen in LIESMICH.txt.
echo.
pause
exit /b 1
:start_py
py -3 "%~dp0starten.py"
goto finished
:start_python
python "%~dp0starten.py"
:finished
if errorlevel 1 pause
endlocal
