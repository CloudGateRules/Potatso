<?php
//------------Start-------------//
header("cache-control:no-cache,must-revalidate");//No-Cache
header("Content-Type:text/html;charset=UTF-8");//UTF-8
//-------------通用-------------//
$NAME = "UPlus";            //名称
$ProxyRU = ",Proxy";        //其他
$DIRECTRU = ",DIRECT";      //其他
$REJECTRU = ",REJECT";      //其他
//-------------文件-------------//
$DefaultFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Default.txt";
$DefaultFile  = $DefaultFile . '?Cache='.time();
$Default = fopen($DefaultFile,"r");
$ProxyFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Proxy.txt";
$ProxyFile  = $ProxyFile . '?Cache='.time();
$Proxy = fopen($ProxyFile,"r");
$GFWListFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/GFWList.txt";
$GFWListFile  = $GFWListFile . '?Cache='.time();
$GFWList = fopen($GFWListFile,"r");
$DIRECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/DIRECT.txt";
$DIRECTFile  = $DIRECTFile . '?Cache='.time();
$DIRECT = fopen($DIRECTFile,"r");
$REJECTFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/REJECT.txt";
$REJECTFile  = $REJECTFile . '?Cache='.time();
$REJECT = fopen($REJECTFile,"r");
$PathFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/Path.txt";
$PathFile  = $PathFile . '?Cache='.time();
$Path = fopen($PathFile,"r");
$KEYWORDFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/KEYWORD.txt";
$KEYWORDFile  = $KEYWORDFile . '?Cache='.time();
$KEYWORD = fopen($KEYWORDFile,"r");
$IPCIDRFile = "http://7xpphx.com1.z0.glb.clouddn.com/Proxy/File/IPCIDR.txt";
$IPCIDRFile  = $IPCIDRFile . '?Cache='.time();
$IPCIDR = fopen($IPCIDRFile,"r");
//-------------下载-------------//
$File = "Potatso.Conf";//下载文件名称
header("cache-control:no-cache,must-revalidate");//No-Cache
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
if($Default){//判断打开错误
echo"\r\n# Default\r\n";
while(!feof($Default))
{
echo "  - ";
echo trim(fgets($Default)).$DIRECTRU."\r\n"; 
}
{
fclose($Default);
}
}else {
  echo "下载失败!";//
}
//PROXY
if($Proxy){//判断打开错误
echo"# PROXY\r\n";
while(!feof($Proxy))
{
echo "  - ";
echo trim(fgets($Proxy)).$ProxyRU."\r\n"; 
}
{
fclose($Proxy);
}
}else {
  echo "下载失败!";//
}
//GFWList
if($GFWList){//判断打开错误
echo"\r\n# GFWList\r\n";
while(!feof($GFWList))
{
echo "  - ";
echo trim(fgets($GFWList)).$ProxyRU."\r\n"; 
}
{
fclose($GFWList);
}
}else {
  echo "下载失败!";//
}
//DIRECT
if($DIRECT){//判断打开错误
echo"# DIRECT\r\n";
while(!feof($DIRECT))
{
echo "  - ";
echo trim(fgets($DIRECT)).$DIRECTRU."\r\n"; 
}
{
fclose($DIRECT);
}
}else {
  echo "下载失败!";//
}
//REJECT
if($REJECT){//判断打开错误
echo"\r\n# REJECT\r\n";
while(!feof($REJECT))
{
echo "  - ";
echo trim(fgets($REJECT)).$REJECTRU."\r\n"; 
}
{
fclose($REJECT);
}
}else {
  echo "下载失败!";//
}
//URL-MATCH
if($Path){//判断打开错误
echo"# URL-MATCH\r\n";
while(!feof($Path))
{
echo "  - URL-MATCH,";
echo fgets($Path)."";
}
{
fclose($Path);
}
}else {//
  echo "下载失败!";//
}
//DOMAIN-MATCH
if($KEYWORD){//判断打开错误
echo"\r\n# DOMAIN-MATCH\r\n";
while(!feof($KEYWORD))
{
echo "  - DOMAIN-MATCH,";
echo fgets($KEYWORD)."";
}
{
fclose($KEYWORD);
}
}else {
  echo "下载失败!";//
}
//IPCIDR
if($IPCIDR){//判断打开错误
echo"\r\n# IP-CIDR\r\n";
while(!feof($IPCIDR))
{
echo "  - IP-CIDR,";
echo fgets($IPCIDR)."";
}
{
fclose($IPCIDR);
}
}else {
  echo "下载失败!";//
}
//Other
echo"\r\n#Other\r\n";
echo"  - GEOIP,CN,DIRECT";
exit();
//--------------END------------//