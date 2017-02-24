<?php

/*
 * License: MIT
 *    Time: 2017-02-08 06:42:34
 *    Name: Potatso.php
 *    Note: CloudGate Potatso Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# Cloud配置信息
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [CloudGate]\r\n";
echo"# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo"#\r\n";
echo"- name: CloudGate\r\n";
echo"  rules: \r\n";

# CloudGate模块
echo Replace(CURL($RuleList['Default']).$CURLContent,'Potatso').$Potatso_Default;
echo Replace(CURL($RuleList['Advanced']).$CURLContent,'Potatso').$Potatso_Advanced;
echo Replace(CURL($RuleList['DIRECT']).$CURLContent,'Potatso').$Potatso_DIRECT;
echo Replace(CURL($RuleList['REJECT']).$CURLContent,'Potatso').$Potatso_REJECT;
echo Replace(CURL($RuleList['KEYWORD']).$CURLContent,'Potatso').$Potatso_KEYWORD;
echo Replace(CURL($RuleList['IPCIDR']).$CURLContent,'Potatso').$Potatso_IPCIDR;
echo Replace(CURL($RuleList['Other']).$CURLContent,'Potatso').$Potatso_Other;

?>