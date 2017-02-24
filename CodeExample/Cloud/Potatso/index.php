<?php

/*
 * License: MIT
 *    Time: 2017-02-08 06:47:55
 *    Name: Potatso.php
 *    Note: CloudGate Potatso Cloud Rule
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

# Cloud配置信息
echo CURL(Cloud($Data,$Potatso_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

# CloudGate模块
echo Replace(CURL($RuleList['Default']).$CURLContent,'Potatso').$Potatso_Default;
echo Replace(CURL($RuleList['Advanced']).$CURLContent,'Potatso').$Potatso_Advanced;
echo Replace(CURL($RuleList['DIRECT']).$CURLContent,'Potatso').$Potatso_DIRECT;
echo Replace(CURL($RuleList['REJECT']).$CURLContent,'Potatso').$Potatso_REJECT;
echo Replace(CURL($RuleList['KEYWORD']).$CURLContent,'Potatso').$Potatso_KEYWORD;
echo Replace(CURL($RuleList['IPCIDR']).$CURLContent,'Potatso').$Potatso_IPCIDR;
echo Replace(CURL($RuleList['Other']).$CURLContent,'Potatso').$Potatso_Other;

?>