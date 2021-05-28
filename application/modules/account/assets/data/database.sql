CREATE TABLE `acc_account_name` (
`account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`account_name` varchar(255) NOT NULL,
`account_type` int(11) NOT NULL,
PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `acn_account_transaction` (
 `account_tran_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `create_by_id` varchar(25) NOT NULL
PRIMARY KEY (`account_tran_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

