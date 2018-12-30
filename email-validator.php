<?php

    /*

        电子邮件地址验证器类 Email Address Validator Class
        http://code.google.com/p/php-email-address-validation/

        根据新BSD许可证发布
        http://www.opensource.org/licenses/bsd-license.php
        
        示例代码
        ----------------
        $validator = new EmailAddressValidator;
        if ($validator->check_email_address('test@example.org')) {
            // 电子邮件地址在技术上有效
        }

    */

    class EmailAddressValidator {

        /**
         * 检查邮件地址有效性
         * @param   strEmailAddress     要检查的电子邮件地址
         * @return  如果电子邮件有效则为True，否则为false
         */
        public function check_email_address($strEmailAddress) {
            
            //如果魔术引号为“on”，带引号的电子邮件地址将会出现
            //因为添加了转义字符而无法验证。取消注释
            //接下来的三行将允许此问题。
            //if (get_magic_quotes_gpc()) { 
            //    $strEmailAddress = stripslashes($strEmailAddress); 
            //}

            // 不允许使用控制字符
            if (preg_match('/[\x00-\x1F\x7F-\xFF]/', $strEmailAddress)) {
                return false;
            }

            // 检查电子邮件长度 - 最小3（a @ a），最大256
            if (!$this->check_text_length($strEmailAddress, 3, 256)) {
                return false;
            }

            // 使用“@”的最后一个实例将其拆分为多个部分
            $intAtSymbol = strrpos($strEmailAddress, '@');
            if ($intAtSymbol === false) {
                // 电子邮件中没有“@”符号
                return false;
            }
            $arrEmailAddress[0] = substr($strEmailAddress, 0, $intAtSymbol);
            $arrEmailAddress[1] = substr($strEmailAddress, $intAtSymbol + 1);

            //计算“@”符号。除了在哪里，只允许一个
            //包含在本地部分的引号中。最快捷的方式
            //检查这是删除引号中的任何内容。我们也删除了
            //使用反斜杠转义的字符和反斜杠
            //字符
            $arrTempAddress[0] = preg_replace('/\./'
                                             ,''
                                             ,$arrEmailAddress[0]);
            $arrTempAddress[0] = preg_replace('/"[^"]+"/'
                                             ,''
                                             ,$arrTempAddress[0]);
            $arrTempAddress[1] = $arrEmailAddress[1];
            $strTempAddress = $arrTempAddress[0] . $arrTempAddress[1];
            // 然后检查 - 应该没有“@”符号。
            if (strrpos($strTempAddress, '@') !== false) {
                // "@" symbol found
                return false;
            }

            // 检查本地部分
            if (!$this->check_local_portion($arrEmailAddress[0])) {
                return false;
            }

            // 检查域名部分
            if (!$this->check_domain_portion($arrEmailAddress[1])) {
                return false;
            }

            // 如果我们还在这里，上面的所有检查都会通过。电子邮件有效。
            return true;

        }

        / **
         *检查“@”符号前的电子邮件部分是否有效
         * @param    strLocalPortion要检查的文本
         * @return   如果本地部分有效则为True，否则为false
         * /
        protected function check_local_portion($strLocalPortion) {
            //本地部分只能包含1到64个字符。
            //请注意，鼓励服务器接受更长的本地服务
            //超过64个字符的部分。
            if (!$this->check_text_length($strLocalPortion, 1, 64)) {
                return false;
            }
            //本地部分必须是：
            // 1）点原子（由句点分隔的字符串）
            // 2）带引号的字符串
            // 3）过时的格式字符串（以上组合）
            $arrLocalPortion = explode('.', $strLocalPortion);
            for ($i = 0, $max = sizeof($arrLocalPortion); $i < $max; $i++) {
                 if (!preg_match('.^('
                                .    '([A-Za-z0-9!#$%&\'*+/=?^_`{|}~-]' 
                                .    '[A-Za-z0-9!#$%&\'*+/=?^_`{|}~-]{0,63})'
                                .'|'
                                .    '("[^\\\"]{0,62}")'
                                .')$.'
                                ,$arrLocalPortion[$i])) {
                    return false;
                }
            }
            return true;
        }

        /**
         * Checks email section after "@" symbol for validity
         * @param   strDomainPortion     Text to be checked
         * @return  True if domain portion is valid, false if not
         */
        protected function check_domain_portion($strDomainPortion) {
            // Total domain can only be from 1 to 255 characters, inclusive
            if (!$this->check_text_length($strDomainPortion, 1, 255)) {
                return false;
            }
            // Check if domain is IP, possibly enclosed in square brackets.
            if (preg_match('/^(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])'
               .'(\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])){3}$/'
               ,$strDomainPortion) || 
                preg_match('/^\[(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])'
               .'(\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])){3}\]$/'
               ,$strDomainPortion)) {
                return true;
            } else {
                $arrDomainPortion = explode('.', $strDomainPortion);
                if (sizeof($arrDomainPortion) < 2) {
                    return false; // Not enough parts to domain
                }
                for ($i = 0, $max = sizeof($arrDomainPortion); $i < $max; $i++) {
                    // Each portion must be between 1 and 63 characters, inclusive
                    if (!$this->check_text_length($arrDomainPortion[$i], 1, 63)) {
                        return false;
                    }
                    if (!preg_match('/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|'
                       .'([A-Za-z0-9]+))$/', $arrDomainPortion[$i])) {
                        return false;
                    }
                    if ($i == $max - 1) { // TLD cannot be only numbers
                        if (strlen(preg_replace('/[0-9]/', '', $arrDomainPortion[$i])) <= 0) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }

        /**
         * Check given text length is between defined bounds
         * @param   strText     Text to be checked
         * @param   intMinimum  Minimum acceptable length
         * @param   intMaximum  Maximum acceptable length
         * @return  True if string is within bounds (inclusive), false if not
         */
        protected function check_text_length($strText, $intMinimum, $intMaximum) {
            // Minimum and maximum are both inclusive
            $intTextLength = strlen($strText);
            if (($intTextLength < $intMinimum) || ($intTextLength > $intMaximum)) {
                return false;
            } else {
                return true;
            }
        }

    }

?>
