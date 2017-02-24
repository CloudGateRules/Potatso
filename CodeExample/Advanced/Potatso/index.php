<?php

/*
 * License: MIT
 *    Time: 2017-02-08 06:51:11
 *    Name: Potatso.php
 *    Note: CloudGate Potatso Advanced Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
@Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance,$TimeOut,$AGENT);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# REQUEST配置信息
echo"proxies:\r\n";
echo"#\r\n";
echo $Potatso_List;
echo"#\r\n";
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [CloudGate]\r\n";
echo"# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo"#\r\n";
echo"- name: CloudGate\r\n";
echo"  rules: \r\n";

# CloudGate模块
echo Advanced(CURL($RuleList['Default']).$CURLContent,$AutoGroup,$Apple).$Potatso_Default;
if($Rule==='true'){echo Advanced(CURL($RuleList['Basic']).$CURLContent,$AutoGroup,$Apple).$Potatso_Proxy;}
elseif($Rule==='false'){echo Advanced(CURL($RuleList['Advanced']).$CURLContent,$AutoGroup,$Apple).$Potatso_Proxy;}
echo Advanced(CURL($RuleList['DIRECT']).$CURLContent,$AutoGroup,$Apple).$Potatso_DIRECT;
echo Advanced(CURL($RuleList['REJECT']).$CURLContent,$AutoGroup,$Apple).$Potatso_REJECT;
echo Advanced(CURL($RuleList['KEYWORD']).$CURLContent,$AutoGroup,$Apple).$Potatso_KEYWORD;
echo Advanced(CURL($RuleList['IPCIDR']).$CURLContent,$AutoGroup,$Apple).$Potatso_IPCIDR;
echo Advanced(CURL($RuleList['Other']).$CURLContent,$AutoGroup,$Apple).$Potatso_Other;

?>