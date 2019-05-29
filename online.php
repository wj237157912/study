ALTER TABLE `c3_cangku_kuaidi` ADD `pdd_bianhao` VARCHAR( 30 ) NOT NULL COMMENT '拼多多面单商家编号' AFTER `jd_no` ;
ALTER TABLE `c3_cangku_kuaidi` ADD `pdd_province_n` VARCHAR( 30 ) NOT NULL COMMENT '拼多多发货省名称' AFTER `hot_address` ,
ADD `pdd_city_n` VARCHAR( 30 ) NOT NULL COMMENT '拼多多发货市名称' AFTER `pdd_province_n` ,
ADD `pdd_town_n` VARCHAR( 30 ) NOT NULL COMMENT '拼多多发货区名称' AFTER `pdd_city_n` ,
ADD `pdd_address` VARCHAR( 100 ) NOT NULL COMMENT '拼多多发货详细地址' AFTER `pdd_town_n` ;
ALTER TABLE `c3_cangku_kuaidi` ADD `shop_id6` MEDIUMINT NOT NULL COMMENT '拼多多授权店铺' after `shop_id4`;
ALTER TABLE `a2_kuaidi` ADD `wpcode6` VARCHAR( 30 ) NOT NULL COMMENT '拼多多面单平台编号' AFTER `wpcode3` ;