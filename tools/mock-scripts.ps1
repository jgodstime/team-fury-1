param([Int32] $count = 400)

$toolsDir = Split-Path $MyInvocation.MyCommand.Path 
Set-Location -Path $toolsDir
$parentDir = Set-Location -Path .. -PassThru
$mocksDir = "$parentDir/mocks"

New-Item $mocksDir -Force -ItemType Directory
Get-ChildItem -Path $mocksDir -Include * -File -Recurse | foreach { $_.Delete()}

for ($num = 1; $num -le $count; $num++) {
$hngId = "HNG-$num"

if ($hngId.length -lt 9) {
	if ($hngId.length -eq 5) { $hngId = $hngId + "0000" }
	if ($hngId.length -eq 6) { $hngId = $hngId + "000" }
	if ($hngId.length -eq 7) { $hngId = $hngId + "00" }
	if ($hngId.length -eq 8) { $hngId = $hngId + "0" }
}

	echo "/**
 * Output data object.
 */
let myOutputData = {
    fullName: 'Full Name',
    hngId: '$hngId',
    email: 'fullname$num@gmail.com',
    language: 'JavaScript'
}

/**
 * Returns a formatted string.
 * 
 * The outputData parameter accepts an output data object and string interpolates the properties
 * of the object to return a formatted string.
 */
const formatOutputData = (outputData) => {
    return ``Hello World, this is `${outputData.fullName}` with HNGi7 ID `${outputData.hngId}` and email `${outputData.email}` using `${outputData.language}` for stage 2 task``;
}

/**
 * Logs a formatted string to the console.
 */
const logOutputData = () => {
    let formattedOutput = formatOutputData(myOutputData);
    console.log(formattedOutput);
}

logOutputData();
" | out-file "$mocksDir\username$num.js" -encoding utf8
}