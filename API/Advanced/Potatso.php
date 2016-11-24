<?php

# 关闭所有 Notice | Warning 级别的错误
error_reporting(E_ALL^E_NOTICE^E_WARNING);

# 页面禁止缓存 | UTF-8编码 | 触发下载
header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# 引用Controller控制器模块
require '../Controller/Controller.php';

# 检测GET参数
if(empty($Rule)){$Rule="false";}elseif($Rule=="true"){$Rule="true";}else{$Rule="false";}
if(empty($Group)){$Group="1";}else{$Group=$Group;}
if(empty($Apple)){$Apple="false";}elseif($Apple=="true"){$Apple="true";}else{$Apple="false";}
if(empty($Config1)){$Config1="SS,127.0.0.1,80,aes-256-cfb,Password";}else{$Config1=$Config1;}
if(empty($Config2)){$Config2="SS,127.0.0.1,80,aes-256-cfb,Password";}else{$Config2=$Config2;}
if(empty($Config3)){$Config3="SS,127.0.0.1,80,aes-256-cfb,Password";}else{$Config3=$Config3;}
if(empty($Config4)){$Config4="SS,127.0.0.1,80,aes-256-cfb,Password";}else{$Config4=$Config4;}
if(empty($Config5)){$Config5="SS,127.0.0.1,80,aes-256-cfb,Password";}else{$Config5=$Config5;}
if(empty($Flag1)){$Flag1="NONE1";}else{$Flag1=$Flag1;}
if(empty($Flag2)){$Flag2="NONE2";}else{$Flag2=$Flag2;}
if(empty($Flag3)){$Flag3="NONE3";}else{$Flag3=$Flag3;}
if(empty($Flag4)){$Flag4="NONE4";}else{$Flag4=$Flag4;}
if(empty($Flag5)){$Flag5="NONE5";}else{$Flag5=$Flag5;}

# 字符串分割数组
$Config1Explode = (explode(",",$Config1));
$Config2Explode = (explode(",",$Config2));
$Config3Explode = (explode(",",$Config3));
$Config4Explode = (explode(",",$Config4));
$Config5Explode = (explode(",",$Config5));

# 判断GET参数
if($Rule=="true"){$AdvancedCURLF=$BasicCURLF;}elseif($Rule=="false"){$AdvancedCURLF=$AdvancedCURLF;}

# 正则表达式替换规则格式
if($Apple=="true"){$Default  = preg_replace('/([^])([ \s]+)/','  - $1,Proxy$2',$DefaultCURLF."\r\n");}
elseif($Apple=="false"){$Default  = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$DefaultCURLF."\r\n");}
$Advanced = preg_replace('/([^])([ \s]+)/','  - $1,Proxy$2',$AdvancedCURLF."\r\n");
$DIRECT   = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$DIRECTCURLF."\r\n");
$REJECT   = preg_replace('/([^])([ \s]+)/','  - $1,REJECT$2',$REJECTCURLF."\r\n");
$KEYWORD  = preg_replace('/([^])([ \s]+)/','  - DOMAIN-MATCH,$1$2',$KEYWORDCURLF."\r\n");
$IPCIDR   = preg_replace('/([^])([ \s]+)/','  - IP-CIDR,$1$2',$IPCIDRCURLF."\r\n");
$OtherF   = preg_replace('/([^])([ \s]+)/','  - $1$2',$OtherCURLF."\r\n");
$Other    = preg_replace('/  - FINAL,Proxy/','',$OtherF."\r\n");

# Potatso[General]规则模板
echo"proxies:\r\n";
echo"#\r\n";
if ($Group<"2"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";}
elseif ($Group<"3"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";
echo"- name: $Flag2\r\n";
echo"- type: ".$Config2Explode[0]."\r\n";
echo"  host: ".$Config2Explode[1]."\r\n";
echo"  port: ".$Config2Explode[2]."\r\n";
echo"  encryption: ".$Config2Explode[3]."\r\n";
echo"  password: ".$Config2Explode[4]."\r\n";}
elseif ($Group<"4"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";
echo"- name: $Flag2\r\n";
echo"- type: ".$Config2Explode[0]."\r\n";
echo"  host: ".$Config2Explode[1]."\r\n";
echo"  port: ".$Config2Explode[2]."\r\n";
echo"  encryption: ".$Config2Explode[3]."\r\n";
echo"  password: ".$Config2Explode[4]."\r\n";
echo"- name: $Flag3\r\n";
echo"  type: ".$Config3Explode[0]."\r\n";
echo"  host: ".$Config3Explode[1]."\r\n";
echo"  port: ".$Config3Explode[2]."\r\n";
echo"  encryption: ".$Config3Explode[3]."\r\n";
echo"  password: ".$Config3Explode[4]."\r\n";}
elseif ($Group<"5"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";
echo"- name: $Flag2\r\n";
echo"  type: ".$Config2Explode[0]."\r\n";
echo"  host: ".$Config2Explode[1]."\r\n";
echo"  port: ".$Config2Explode[2]."\r\n";
echo"  encryption: ".$Config2Explode[3]."\r\n";
echo"  password: ".$Config2Explode[4]."\r\n";
echo"- name: $Flag3\r\n";
echo"  type: ".$Config3Explode[0]."\r\n";
echo"  host: ".$Config3Explode[1]."\r\n";
echo"  port: ".$Config3Explode[2]."\r\n";
echo"  encryption: ".$Config3Explode[3]."\r\n";
echo"  password: ".$Config3Explode[4]."\r\n";
echo"- name: $Flag4\r\n";
echo"  type: ".$Config4Explode[0]."\r\n";
echo"  host: ".$Config4Explode[1]."\r\n";
echo"  port: ".$Config4Explode[2]."\r\n";
echo"  encryption: ".$Config4Explode[3]."\r\n";
echo"  password: ".$Config4Explode[4]."\r\n";}
elseif ($Group<"6"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";
echo"- name: $Flag2\r\n";
echo"  type: ".$Config2Explode[0]."\r\n";
echo"  host: ".$Config2Explode[1]."\r\n";
echo"  port: ".$Config2Explode[2]."\r\n";
echo"  encryption: ".$Config2Explode[3]."\r\n";
echo"  password: ".$Config2Explode[4]."\r\n";
echo"- name: $Flag3\r\n";
echo"  type: ".$Config3Explode[0]."\r\n";
echo"  host: ".$Config3Explode[1]."\r\n";
echo"  port: ".$Config3Explode[2]."\r\n";
echo"  encryption: ".$Config3Explode[3]."\r\n";
echo"  password: ".$Config3Explode[4]."\r\n";
echo"- name: $Flag4\r\n";
echo"  type: ".$Config4Explode[0]."\r\n";
echo"  host: ".$Config4Explode[1]."\r\n";
echo"  port: ".$Config4Explode[2]."\r\n";
echo"  encryption: ".$Config4Explode[3]."\r\n";
echo"  password: ".$Config4Explode[4]."\r\n";
echo"- name: $Flag5\r\n";
echo"  type: ".$Config5Explode[0]."\r\n";
echo"  host: ".$Config5Explode[1]."\r\n";
echo"  port: ".$Config5Explode[2]."\r\n";
echo"  encryption: ".$Config5Explode[3]."\r\n";
echo"  password: ".$Config5Explode[4]."\r\n";}
elseif ($Group>"6"){
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";}
else {
echo"- name: $Flag1\r\n";
echo"  type: ".$Config1Explode[0]."\r\n";
echo"  host: ".$Config1Explode[1]."\r\n";
echo"  port: ".$Config1Explode[2]."\r\n";
echo"  encryption: ".$Config1Explode[3]."\r\n";
echo"  password: ".$Config1Explode[4]."\r\n";}
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [CloudGate]\r\n";
echo"# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo"#\r\n";
echo"- name: CloudGate\r\n";
echo"  rules: \r\n";

# 最后模块内容输出
echo "# Default\r\n".$Default;
echo "# PROXY\r\n".$Advanced;
echo "# DIRECT\r\n".$DIRECT;
echo "# REJECT\r\n".$REJECT;
echo "# KEYWORD\r\n".$KEYWORD;
echo "# IP-CIDR\r\n".$IPCIDR;
echo "# Other\r\n".$Other;

?>