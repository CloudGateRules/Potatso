<?php
//------------Start-------------//
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------通用-------------//
$NAME = "UPlus";            //名称
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Proxy.txt";
$Proxy = fopen($ProxyFile,"r");
$GFWListFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/GFWList.txt";
$GFWList = fopen($GFWListFile,"r");
$DIRECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/DIRECT.txt";
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECT = fopen($REJECTFile,"r");
$PathFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Path.txt";
$Path = fopen($PathFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDR = fopen($IPCIDRFile,"r");
//-------------下载-------------//
$File = "Potatso.Conf";//下载文件名称
header('Content-type: application/octet-stream; charset=utf8');//下载动作
header("Accept-Ranges: bytes");
header('Content-Disposition: attachment; filename='.$File);//名称
//--------------配置------------//
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [$NAME]\r\n";
echo"# Last Modified: " . date("Y/m/d") . "\r\n";
echo"#\r\n";
echo"- name: $NAME\r\n";
echo"  rules: ";
//--------------输出------------//
//Default
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo "  - ";
echo fgets($Default)."";
}
{
fclose($Default);
}
//Proxy
echo"\r\n# Proxy\r\n";
while(!feof($Proxy))
{
echo "  - ";
echo fgets($Proxy)."";
}
{
fclose($Proxy);
}
//GFWList
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo "  - ";
echo fgets($GFWList)."";
}
{
fclose($GFWList);
}
//DIRECT
echo"\r\n# DIRECT\r\n";
while(!feof($DIRECT))
{
echo "  - ";
echo fgets($DIRECT)."";
}
{
fclose($DIRECT);
}
//REJECT
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo "  - ";
echo fgets($REJECT)."";
}
{
fclose($REJECT);
}
//URL-MATCH
echo"\r\n# URL-MATCH\r\n";
while(!feof($Path))
{
echo "  - URL-MATCH,";
echo fgets($Path)."";
}
{
fclose($Path);
}
//DOMAIN-MATCH
echo"\r\n# DOMAIN-MATCH\r\n";
while(!feof($KEYWORD))
{
echo "  - DOMAIN-MATCH,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
//IPCIDR
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "  - IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
//Other
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
//--------------END-------------//