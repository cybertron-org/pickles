@echo off
echo Replacing phone numbers in all PHP files...

REM Replace (551) 290-8897 with PHP variable
powershell -Command "(Get-ChildItem -Path . -Recurse -Filter *.php) | ForEach-Object { (Get-Content $_.FullName) -replace '\(551\) 290-8897', '<?php echo $phone_number ?>' | Set-Content $_.FullName }"

REM Replace (949) 323-3170 with PHP variable  
powershell -Command "(Get-ChildItem -Path . -Recurse -Filter *.php) | ForEach-Object { (Get-Content $_.FullName) -replace '\(949\) 323-3170', '<?php echo $phone_number ?>' | Set-Content $_.FullName }"

echo Phone numbers replaced successfully!
pause