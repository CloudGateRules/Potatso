<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:14:17
 *    Name: Potatso.php
 *    Note: CloudGate Potatso Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Potatso.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# Cloud配置信息
echo"ruleSets:\r\n";
echo"# \r\n";
echo"# Potatso Config File [CloudGate]\r\n";
echo"# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo"#\r\n";
echo"- name: CloudGate\r\n";
echo"  rules: \r\n";

# CloudGate模块
echo "# Default\r\n".Replace(CURL(true,$RuleList['Default']).$CURLContent,false,false,true,false,false).$Potatso_Default;
echo "# PROXY\r\n".Replace(CURL(true,$RuleList['Advanced']).$CURLContent,false,false,true,false,false).$Potatso_Advanced;
echo "# DIRECT\r\n".Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,false,false,true,false,false).$Potatso_DIRECT;
echo "# REJECT\r\n".Replace(CURL(true,$RuleList['REJECT']).$CURLContent,false,false,true,false,false).$Potatso_REJECT;
echo "# KEYWORD\r\n".Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,false,false,true,false,false).$Potatso_KEYWORD;
echo "# IPCIDR\r\n".Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,false,false,true,false,false).$Potatso_IPCIDR;
echo "# Other\r\n".Replace(CURL(true,$RuleList['Other']).$CURLContent,false,false,true,false,false).$Potatso_Other;

?>