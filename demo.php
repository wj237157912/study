select * from orders where receivername like '%姚远%' and ymd>=20170901

update shop_order set order_status=4 where only_key='b580d39eb59c1b6d36240a195ca43a8d' and ymd=20180213

ALTER TABLE `goods` CHANGE `max_num` `max_num` INT( 11 ) NOT NULL DEFAULT '1' COMMENT '最大补货量';
12243 
6921440366539
KS1802230061410
KS1802230059004

A003514  6902227012078	嘉顿 香葱薄饼225g/盒
AM02023	 6902227014591	嘉顿 花生味威化饼干200g/包 	

2A20180100016254 	6902227012078 	嘉顿 香葱薄饼225g/盒 	2018-02-28 	100% 	A-CC-36 	12 	100 	0 	1200

33

121557800086139539

se

select a.caigou_title,a.bianhao,a.no,b.unit_nums from goods a left join goods_addition3 b on a.id=b.gid where a.caigou_status=2 and a.status=1

2A20180400145513
14658
6A1805220099571



RSO18050016521101224122

select * from new_mission where order_id='KS1805290002680'

6A1805250114171
6A1805290130047 	KS1805290002680
14541

select a.caigou_title,a.bianhao,a.no,b.life_time,b.unit_nums,c.title from goods_addition3 b inner join goods a on a.id=b.gid inner join goods_area c on b.location_id = c.id where a.caigou_status=2

14502 	6948965901946

select * from code_group_new where gid=14504

14504 	6948965900352

	12916
猫诚食品官网  D
分销地推店  KH
猫诚旗舰店  TA
馋猫屋休闲零食  TC
亨誉食品专营店  TB
嘀嗒猫店(已废)  TD
一号猫诚店(已废)  YA
一号亨誉店(已废)  YB
京东猫诚店  JA
京东进口店  JB
当当猫诚店  QA
苏宁猫诚店(已废)  NA
聚美优品网店(已废)  JM
大客户1店  KA
大客户2店  KB
猫诚分销组  KC
天猫超市组  KD
其它订单组  KE
补发票订单店铺  S
猫诚补发组  S
京东超市  KE
嘀嗒猫旗舰店  TD
嘀嗒猫自营店  TE
嘀嗒猫京东旗舰店  JC
嘀嗒猫人工组  KF
蘑菇街猫诚店  MA
猫诚零售通虚仓  TS
萌店  DB
楚楚通(已废)  C
云集  YJ
猫城记小程序店铺  DW
闪电购  DS
京东入仓  JD
银泰猫诚  DA
银泰嘀嗒猫  DC
猫诚便利  DE
嘀嗒猫小程序店铺  DH
天猫国际供货  TM
猫超销售店铺  KS
小红书  X
planters绅士猫诚专卖店  TH
拼多多  JE
好食期  JF
唯品会  VP
蜜芽  MY
浦发信用卡  TP
盒马店铺  HM
sundry山萃亨誉专卖店  TN
米迪先生  NA
榴的华食品旗舰店  LD
亚马逊  YM
京东猫诚代销店  JA
嘀嗒猫京东代销店  JC
京东进口代销店  JB
猫诚零售通实仓  LS
卫龙秀味专卖店  WL


ALTER TABLE `cang_list` ADD `name2` VARCHAR( 50 ) NOT NULL COMMENT '第三方仓库名称' AFTER `name` ;
select * from new_mission where order_id='KS1806010008906' and ymd=20180601	

delete from orders where order_id in ('R1805080013112','R1805080010183','R1805080010154') and ymd=20180508
delete from system_move_cart where order_id in ('R1805080013112','R1805080010183','R1805080010154') and ymd=20180508
6A1806040029309 	HM1806040025207
2A20180600012966
836188
update mission_kc_code set cart_no='1C22235' where id=836300

6A1806050030812 	KS1806050014296
2A20180500055682

AM00814 	4710199086506 	张君雅 巧克力甜甜圈45克/包 	150 	0 	0 	15 	Q8 		
AM00482 	4710199085509 	张君雅 碳烤鸡汁点心面100g/包 	150 	0 	0 	15 	Q6 		
MC0007 	4710199085707


订单：TA1801010019687    天猫猫诚店订单号 117854854788663121 

订单：TA1801010015254   天猫猫诚店订单 号103106306643688250


天猫超市下 销售导入 屏蔽  相关数据删除
采购预申请 入库仓库 第三方仓库屏蔽
脚本 创建任务从 171231  

1】财务提供2017年12月31日的期末库存日报数据  ，上线前，进行导入作为期初库存日报数据（可通过生成12-31日的库存导入任务完成）
2】删除猫超店铺下所有的销售订单及相关数据 （重新导入）
3】关闭原猫超的销售导入 入口 
4】自动生成1-1开始的导入任务 
5】给时超男/财务（吴倩倩，邹玲，余娜娜，TESSIE），开通新增菜单的权限


('KS1806140030209','KS1806140029209','KS1806140029206','KS1806140029204','KS1806140029202','KS1806140029200','KS1806140029196','KS1806140029194','KS1806140029183','KS1806140029177')

select * from new_mission where order_id in (,'','','','','','','','','') and ymd=20180614

select * from orders where order_id in ('KS1806140030209','KS1806140029209','KS1806140029206','KS1806140029204','KS1806140029202','KS1806140029200','KS1806140029196','KS1806140029194','KS1806140029183','KS1806140029177') and ymd=20180614


select * from new_mission where order_id in ('KS1806140029122','KS1806140029177') and ymd=20180614
select * from orders where order_id in ('KS1806140029122','KS1806140029177') and ymd=20180614


update orders set status=17,peisong_type=2,time2=1528973255,time3=1528985176,count_status=3,third_id=806140029183 where order_id='KS1806140029183' and ymd=20180614

update orders set status=17,peisong_type=2,time2=1528973255,time3=1528985176,count_status=3,third_id=806140029177 where order_id='KS1806140029177' and ymd=20180614

 


select * from shop_addition1 where json_data2 like '%"n":"0"%' and ymd>20180615


180584822845404531
select * from orders where ymd=20180115 and shop_id=39 and kefu_message like '%红冲导入' order by id desc

677483
5513
671969
671969

671812
5672
SELECT only_key,count(*) as count from third_red_data group by only_key having count>1

14707
select * from d1_jxc_log where ymd=180115 and data_type in (8,9)

017256b2386beb8c2b65c437cddbe1c8 	3
01a3db99775454fa9387fc82b0903bac 	3
056aad3da41727492e536001f04db60b 	3

select * from new_mission where order_id='KS1807050019079' and ymd=20180705

102
126

14222

A180706024

select sum(*) from orders where shop_id=39 and ymd=20180115 and kefu_message like '%红冲导入'

964828

16205
971001
987206
select sum(goods_nums) from orders where ymd>=20180101 and ymd<=20180115 and is_transport=0 and shop_id=39

2A20180700061948

update kc_ruku set goods_box_nums=0,search_key='14503#20180705#20190101#0#1' where kc_code='2A20180700061948'
52176741  6735

170862499499847142

6 	5 	2 	分销直送 	分销 	
14541  轩妈
select * from cang_num where only_key='6#14541' 
update cang_num set nums=20 where only_key='6#14541'

KS1804270030703
select * from orders_fapiao where order_id='GR1807150006271' and ymd=20180715

14658

select * from system_variable where code='newdata_close'
4600648575241

6116

2018-07-20 15:02:02
2018-07-20 15:08:04

2018-07-20 15:12:53
2018-07-20 15:18:48

2018-07-20 15:40:39
2018-07-20 15:42:23
2018-07-20 15:42:23

9A014522

get_goods_ym_cost

商品ID  gid 
商品名称  title
商品编号  bianhao
开始日期  y1
结束日期  y2
期初库存量  n1
期初库存总价  c1
供应商采购入库数量  n2
供应商采购入库总价  c2
客户退换货入库数量  n3
客户退换货入库总价  c3
供应商换货出库数量  n4
供应商换货出库总价  c4
供应商换货入库数量  n5
供应商换货入库总价  c5
组合商品出库数量  n6
组合商品出库总价  c6
组合商品入库数量  n7
组合商品入库总价  c7
销售订单出库数量  n8
销售订单出库总价  c8
销售订单入库数量  n9
销售订单入库总价  c9
客户退换货出库数量  n10
客户退换货出库总价  c10
报损出库数量  n12
报损出库总价  c12
商务自用出库数量  n13
商务自用出库总价  c13
非订单销售出库数量  n14
非订单销售出库总价  c14
赠品出库数量  n15
赠品出库总价  c15
借货出库数量  n16
借货出库总价  c16
质量问题出库数量  n17
质量问题出库总价  c17
虚拟库存出库数量  n18
虚拟库存出库总价  c18
入库错误出库数量  n19
入库错误出库总价  c19
在途库存期初  sn2
在途库存期初总价  sc2
在途库存期末  en2
在途库存期末总价  ec2
在途库存入库数量  on2
在途库存入库总价  oc2
在途库存出库数量  on1
在途库存出库总价  oc1
并库入库数量  bn2
并库入库总价  bc2
其它出库数量  n20
其它出库总价  c20
其它入库数量  n21
其它入库总价  c21 
零时冻结出库数量  n23
零时冻结出库总价  c23
尾差数量  en
尾差总价  et
期末库存数量  en1
期末库存总价  ec1

TA1807020000031 	18070200006001S
SELECT `gid` FROM x_count_ymd_goods_data where ymd =

12637   5410126006339 	9A012867

select wcode,gid,plan_id,nums,totals,ymd2,red_num,price from depository_in where ymd2 >=y1 and ymd2 <= y2 and plan_id > 0

select id from cang_list where parent_id = 3
206,207,208,209,210

select `ymd`,`order_id`,`cancel_time`,`time4`,`is_transport`,`timestamp`,f_cid,t_cid from orders where ymd >= y1 and ymd <= y2 and is_transport = 1 limit 200000

select order_id,ymd,gid,nums from system_move_cart where `order_id` in ('.implode(',', $oids).') and ymd in ('.implode(',', $ymds).')

select * from ymd_cost where ym =i.m limit 100000

4260336470496

select * from ymd_cost where ym = ym
select * from cache_kucun where ymd = y order by ymdh asc,id asc limit 1
select * from cache_kucun where ymd = y order by ymdh desc,id desc limit 1

select id from cang_list where is_thirdpartnar = 0
select * from depository_in where ymd2 =y and wcode in($cang_id)
select plan_id,gid,price,yunfei_price from sp_plan_goods where plan_id in ('.implode(',', pi).')

select * from sp_plan where id = i.plan_id
SELECT * FROM `depository_out` where `ymd2` = y and `types` > 0  order by `id`

147089572729023749
161749080111272806
161844001478619214
162769807124747297

select * from orders where shop_id=39 and ymd>=20180101 and ymd<=20180131 and kefu_message like '%红冲导入'

14503 	6948965901564 	泡吧 冰淇淋蛋糕（香草鸡蛋味）1kg/箱
13381


$tmp = array(
        'gids' => array($gid),
        'ym' => $ym,
        'cang_id' => $cang_id,
    );
$price_list = $data2018_class->get_goods_ym_cost($tmp);
$price = $price_list[$gid][$_ymd];

CREATE TABLE `new_ymd_goods_data` (
 `ymd` int(11) NOT NULL,
 `type` int(11) NOT NULL,
 `gid` int(11) NOT NULL,
 `num1` int(11) NOT NULL COMMENT '每日期初库存量',
 `num2` int(11) NOT NULL COMMENT '供应商采购入库数量',
 `num3` int(11) NOT NULL,
 `num4` int(11) NOT NULL,
 `num5` int(11) NOT NULL,
 `num6` int(11) NOT NULL,
 `num7` int(11) NOT NULL,
 `num8` int(11) NOT NULL,
 `num9` int(11) NOT NULL,
 `num10` int(11) NOT NULL,
 `num11` int(11) NOT NULL,
 `num12` int(11) NOT NULL,
 `num13` int(11) NOT NULL,
 `num14` int(11) NOT NULL,
 `num15` int(11) NOT NULL,
 `num16` int(11) NOT NULL,
 `num17` int(11) NOT NULL,
 `num18` int(11) NOT NULL,
 `num19` int(11) NOT NULL,
 `num20` int(11) NOT NULL,
 `num21` int(11) NOT NULL,
 `num22` int(11) NOT NULL,
 `num23` int(11) NOT NULL,
 `num24` int(11) NOT NULL,
 `num25` int(11) NOT NULL COMMENT '期末在途库存',
 `num26` int(11) NOT NULL,
 `pay_total` varchar(15) NOT NULL COMMENT '支付的总额',
 `md5_val` varchar(32) NOT NULL COMMENT '记录相似度',
 `cost_1` decimal(11,2) NOT NULL,
 `cost_2` decimal(11,2) NOT NULL,
 `cost_3` decimal(11,2) NOT NULL,
 `cost_4` decimal(11,2) NOT NULL,
 `cost_5` decimal(11,2) NOT NULL,
 `cost_6` decimal(11,2) NOT NULL,
 `cost_7` decimal(11,2) NOT NULL,
 `cost_8` decimal(11,2) NOT NULL,
 `cost_9` decimal(11,2) NOT NULL,
 `cost_10` decimal(11,2) NOT NULL,
 `cost_11` decimal(11,2) NOT NULL,
 `cost_12` decimal(11,2) NOT NULL,
 `cost_13` decimal(11,2) NOT NULL,
 `cost_14` decimal(11,2) NOT NULL,
 `cost_15` decimal(11,2) NOT NULL,
 `cost_16` decimal(11,2) NOT NULL,
 `cost_17` decimal(11,2) NOT NULL,
 `cost_18` decimal(11,2) NOT NULL,
 `cost_19` decimal(11,2) NOT NULL,
 `cost_20` decimal(11,2) NOT NULL,
 `cost_21` decimal(11,2) NOT NULL,
 `cost_22` decimal(11,2) NOT NULL,
 `cost_23` decimal(11,2) NOT NULL,
 `cost_24` decimal(11,2) NOT NULL,
 `cost_25` decimal(11,2) NOT NULL COMMENT '期末在途库存',
 `cost_26` decimal(11,2) NOT NULL,
 `update_time` int(11) NOT NULL,
 UNIQUE KEY `search_key` (`ymd`,`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品每日进销存'
/*!50500 PARTITION BY RANGE  COLUMNS(ymd)
(PARTITION p007 VALUES LESS THAN (20180101) ENGINE = InnoDB,
PARTITION p008 VALUES LESS THAN (20180701) ENGINE = InnoDB,
PARTITION p009 VALUES LESS THAN (20190101) ENGINE = InnoDB,
PARTITION p010 VALUES LESS THAN (20190701) ENGINE = InnoDB,
PARTITION p011 VALUES LESS THAN (20200101) ENGINE = InnoDB,
PARTITION p012 VALUES LESS THAN (20200701) ENGINE = InnoDB,
PARTITION p013 VALUES LESS THAN (20210101) ENGINE = InnoDB,
PARTITION p014 VALUES LESS THAN (20210701) ENGINE = InnoDB,
PARTITION p015 VALUES LESS THAN (20220101) ENGINE = InnoDB,
PARTITION p016 VALUES LESS THAN (20220701) ENGINE = InnoDB,
PARTITION p017 VALUES LESS THAN (20230101) ENGINE = InnoDB,
PARTITION p018 VALUES LESS THAN (20230701) ENGINE = InnoDB,
PARTITION p019 VALUES LESS THAN (20240101) ENGINE = InnoDB,
PARTITION p020 VALUES LESS THAN (20240701) ENGINE = InnoDB,
PARTITION p021 VALUES LESS THAN (20250101) ENGINE = InnoDB,
PARTITION p022 VALUES LESS THAN (20250701) ENGINE = InnoDB,
PARTITION p999 VALUES LESS THAN (MAXVALUE) ENGINE = InnoDB) */

9A015186

("MY1808070051418","MY1808070051416","MY1808050074666","MY1808030025543","MY1808030025542")
"MY1808070051417"
update system_move_cart set price='28.5',totals='57',pay_price='28.5',pay_price_totals='57' where ymd>20180801 and shop_id=45 and bianhao='9A015186' and order_id in ("MY1808070051417")
update orders set goods_price='28.5',totals='57',pay_totals='57' where ymd>20180801 and shop_id=45  and order_id in ("MY1808070051417")
select * from system_move_cart where ymd>20180801 and shop_id=45 and bianhao='9A015186'
select * from system_move_cart where ymd>20180801 and shop_id=45 and order_id in ("MY1808070051418","MY1808070051416","MY1808050074666","MY1808030025543","MY1808030025542","MY1808070051417")

select * from orders where order_id='YJ1808030015348'and ymd>20180801
select * from orders where order_id='TP1808090018341'and ymd>20180801
14942

13998

SELECT parent_id, shop_id, gid, bianhao, num , name FROM {module}order_cart WHERE company_id = 1 AND ymd IN


15862 	1 	1 	1 	0 	15862 	0 	6918598150219 	2A10000209 	【赠品】波力 海苔拉面仔80g/袋

update w3_code set where no ='2A18122800112605'
update w3_code_group set ymd_end=211115  where id=17727

2A19012200365948

15798 	1 	1 	2 	0 	15798 	0 	6954041301128 	2A10000145 	【代发货】吻肤 甜心独角兽香氛洗衣液

alter table w3_code_group add unique index `search_key1`(`company_id`,`cang_id`,`gid`,`ymd_start`,`ymd_end`)

alter table w3_code_group drop index search_key1

ALTER TABLE `w3_code_group` ADD UNIQUE `search_key1` ( `company_id` , `cang_id` , `gid` , `ymd_start` , `ymd_end` ) 

SELECT s2.* FROM (SELECT id FROM s2_order WHERE  input_type IN (0, 1, 2, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 23, 24, 25, 26, 27, 28, 29, 30, 33, 34) AND t_status IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28) AND phone_md5 = '130*****317'  AND shop_id IN (3, 5, 22, 41, 44, 49, 50, 56, 57, 63, 67, 68, 1, 2, 3, 5, 9, 10, 11, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 24, 25, 26, 27, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 49, 50, 51, 52, 53, 54, 55, 56, 57, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86) AND ymd IN (190207, 190208, 190209, 190210, 190211, 190212, 190213, 190214, 190215, 190216, 190217, 190218, 190219, 190220, 190221, 190222, 190223, 190224, 190225, 190226, 190227) and company_id = 1 ORDER BY id DESC LIMIT 0, 1000) a INNER JOIN s2_order s2 ON a.id = s2.id WHERE s2.company_id = 1 AND s2.ymd IN (190207, 190208, 190209, 190210, 190211, 190212, 190213, 190214, 190215, 190216, 190217, 190218, 190219, 190220, 190221, 190222, 190223, 190224, 190225, 190226, 190227)

SELECT id FROM s2_order force index(search_key18) WHERE  input_type IN (0, 1, 2, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 23, 24, 25, 26, 27, 28, 29, 30, 33, 34) AND t_status IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28) AND phone_md5 = '130*****317'  AND shop_id IN (3, 5, 22, 41, 44, 49, 50, 56, 57, 63, 67, 68, 1, 2, 3, 5, 9, 10, 11, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 24, 25, 26, 27, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 49, 50, 51, 52, 53, 54, 55, 56, 57, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86) AND ymd IN (190207, 190208, 190209, 190210, 190211, 190212, 190213, 190214, 190215, 190216, 190217, 190218, 190219, 190220, 190221, 190222, 190223, 190224, 190225, 190226, 190227) and company_id = 1 ORDER BY id DESC LIMIT 0, 1000


SELECT s2.* FROM (SELECT id FROM s2_order WHERE company_id = 1 AND have_life = 1 AND order_id4 LIKE 'D%'AND t_status = 2 AND ymd IN (190201, 190202, 190203, 190204, 190205, 190206, 190207, 190208, 190209, 190210, 190211, 190212, 190213, 190214, 190215, 190216, 190217, 190218, 190219, 190220, 190221, 190222, 190223, 190224, 190225, 190226, 190227, 190228, 190301)AND f_cid1 IN (1, 3, 5, 10, 29, 205, 596, 608, 620, 10019) ORDER BY id DESC LIMIT 0, 20 ) a INNER JOIN s2_order s2 ON a.id = s2.id WHERE s2.company_id = 1 AND s2.ymd IN (190201, 190202, 190203, 190204, 190205, 190206, 190207, 190208, 190209, 190210, 190211, 190212, 190213, 190214, 190215, 190216, 190217, 190218, 190219, 190220, 190221, 190222, 190223, 190224, 190225, 190226, 190227, 190228, 190301)

select s2.* from (select id from  s2_order  force index (search_key18)  where  company_id = 1 and input_type in (0,1,2,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,23,24,25,26,27,28,29,30,33,34) and t_status in (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28)  and ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313)  and shop_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93)  order by id desc limit 20) a inner join s2_order s2 on a.id = s2.id where s2.company_id = 1  and s2.ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313)


select s2.*  from (select id from  s2_order  force index (PRI)  where  company_id = 1 and input_type in (0,1,2,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,23,24,25,26,27,28,29,30,33,34) and t_status in (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28)  and ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313)  and shop_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93)) a inner join s2_order s2 on a.id = s2.id where s2.company_id = 1  and s2.ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313) order by id desc limit 30

select count(1) from s2_order  force index (search_key18)  where  company_id = 1 and input_type in (0,1,2,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,23,24,25,26,27,28,29,30,33,34) and t_status in (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28)  and ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313)  and shop_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93)


select s2.* from (select id from   s2_order force index (PRI)  where  company_id = 1 and input_type in (0,1,2,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,23,24,25,26,27,28,29,30,33,34) and t_status in (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 22, 23, 24, 25, 28)  and phone_md5 = '180*****904'  and ymd in (190221,190222,190223,190224,190225,190226,190227,190228,190301,190302,190303,190304,190305,190306,190307,190308,190309,190310,190311,190312,190313)  and shop_id in (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93)  order by id desc limit 0, 1000) a inner join s2_order s2 on a.id = s2.id 

insert into c3_goods_chird values(1,15657,14771,1,1)


ALTER TABLE w4_return ADD UNIQUE INDEX ( company_id, ymd, kuaidi_no ) 

ALTER TABLE `w2_cang` ADD `locked` TINYINT( 1 ) NOT NULL COMMENT '补货锁定' AFTER `shop_id` ;

cainiao.cloudprint.stdtemplates.get

select * from w3_mission_item where data_type=1 and t_status=5 and company_id=1 and cang_id=1 and gid=14766 order by id limit 1

http://gw.api.tbsandbox.com/router/rest

SELECT COUNT(1) FROM w3_code WHERE company_id = '1' AND code_time >= 1553788800 AND code_time <= '1556467200' AND pid = ''

SELECT * FROM w1_goods WHERE company_id = 1 AND is_flag = 1 ORDER BY order_id ASC LIMIT 0, 20


update c3_goods set tax_rate1=9,tax_rate2=9 where bianhao in ('AM00178','AM02295','A003678','A010325','A010368','A010693','A011000','A011194','A011442','A012004','A012547','9A012929','9A013039','9A013063','9A013165','9A013289','9A013378','9A013410','9A013602','9A013612','9A013613','9A013738','9A014521','9A014552','9A014578','9A014781','9A014782','9A014859','9A014860','9A015190','9A015191','9A015192','9A015197','9A015198','9A015200','9A015201','9A015365','9A015543','9A015652','9A015788','9A015790','9A015863','10000105')

select * from c3_goods where bianhao in ('AM00178','AM02295','A003678','A010325','A010368','A010693','A011000','A011194','A011442','A012004','A012547','9A012929','9A013039','9A013063','9A013165','9A013289','9A013378','9A013410','9A013602','9A013612','9A013613','9A013738','9A014521','9A014552','9A014578','9A014781','9A014782','9A014859','9A014860','9A015190','9A015191','9A015192','9A015197','9A015198','9A015200','9A015201','9A015365','9A015543','9A015652','9A015788','9A015790','9A015863','10000105')


https://oauth.tbsandbox.com/authorize?response_type=code&client_id=1025023716&redirect_uri=http://tb.erp2009.com&state=1212&view=web

AppKey 	1025023716 	
Nick 	sandbox_c_1 	
Sessionkey 	610282897fb147aa099ecd59a1b5288f15501c0795adb8d2074082786 	
有效时间 	Fri Aug 30 10:21:52 CST 2019 	
RefreshToken 	610282897fb147aa099ecd59a1b5288f15501c0795adb8d2074082786

AppKey 	test 	
Nick 	sandbox_c_1 	
Sessionkey 	6101e10ef1dedd58141cc0d0196b1c5b0316ea7550a1b6d2074082786 	
有效时间 	Tue Apr 02 21:25:53 CST 2019 	
RefreshToken 	6101e10ef1dedd58141cc0d0196b1c5b0316ea7550a1b6d2074082786 	
RefreshToken有效时间 	Sun Sep 29 10:25:53 CST 2019

 http://proxy.api.tbsandbox.com/router/rest?app_key=1025023716&session=610282897fb147aa099ecd59a1b5288f15501c0795adb8d2074082786&v=2.0&format=json&sign_method=md5&method=cainiao.waybill.ii.search&timestamp=2019-04-02+15%3A28%3A47&partner_id=top-sdk-php-20110125&sign=048BACE3403113E34E0345A5601A74F3

 <?php
class WS {
     var $master;  // 连接 server 的 client
     var $sockets = array(); // 不同状态的 socket 管理
     var $handshake = false; // 判断是否握手
 
     function __construct($address, $port){
         // 建立一个 socket 套接字
         $this->master = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)   
             or die("socket_create() failed");
         socket_set_option($this->master, SOL_SOCKET, SO_REUSEADDR, 1)  
             or die("socket_option() failed");
         socket_bind($this->master, $address, $port)                    
             or die("socket_bind() failed");
         socket_listen($this->master, 2)                               
             or die("socket_listen() failed");
 
         $this->sockets[] = $this->master;
 
         // debug
         echo("Master socket  : ".$this->master."\n");
 
         while(true) {
             //自动选择来消息的 socket 如果是握手 自动选择主机
             $write = NULL;
             $except = NULL;
             socket_select($this->sockets, $write, $except, NULL);
 
             foreach ($this->sockets as $socket) {
                 //连接主机的 client 
                 if ($socket == $this->master){
                     $client = socket_accept($this->master);
                     if ($client < 0) {
                         // debug
                         echo "socket_accept() failed";
                         continue;
                     } else {
                         //connect($client);
                         array_push($this->sockets, $client);
                         echo "connect client\n";
                     }
                 } else {
                     $bytes = @socket_recv($socket,$buffer,2048,0);
                     print_r($buffer);
                     if($bytes == 0) return;
                     if (!$this->handshake) {
                         // 如果没有握手，先握手回应
                         $this->doHandShake($socket, $buffer);
                         echo "shakeHands\n";
                     } else {
                     
                         // 如果已经握手，直接接受数据，并处理
                         $buffer = $this->decode($buffer);
                         //process($socket, $buffer); 
                         echo "send file\n";
                     }
                 }
             }
         }
     }
     
     function dohandshake($socket, $req)
     {
         // 获取加密key
         $acceptKey = $this->encry($req);
         $upgrade = "HTTP/1.1 101 Switching Protocols\r\n" .
                    "Upgrade: websocket\r\n" .
                    "Connection: Upgrade\r\n" .
                    "Sec-WebSocket-Accept: " . $acceptKey . "\r\n" .
                    "\r\n";
 
         echo "dohandshake ".$upgrade.chr(0);           
         // 写入socket
         socket_write($socket,$upgrade.chr(0), strlen($upgrade.chr(0)));
         // 标记握手已经成功，下次接受数据采用数据帧格式
         $this->handshake = true;
     }
     
     
     function encry($req)
     {
         $key = $this->getKey($req);
         $mask = "258EAFA5-E914-47DA-95CA-C5AB0DC85B11";
 
         return base64_encode(sha1($key . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11', true));
     }
     
     function getKey($req) 
     {
         $key = null;
         if (preg_match("/Sec-WebSocket-Key: (.*)\r\n/", $req, $match)) { 
             $key = $match[1]; 
         }
         return $key;
     }
     
     // 解析数据帧
     function decode($buffer)  
     {
         $len = $masks = $data = $decoded = null;
         $len = ord($buffer[1]) & 127;
 
         if ($len === 126)  {
             $masks = substr($buffer, 4, 4);
             $data = substr($buffer, 8);
         } else if ($len === 127)  {
             $masks = substr($buffer, 10, 4);
             $data = substr($buffer, 14);
         } else  {
             $masks = substr($buffer, 2, 4);
             $data = substr($buffer, 6);
         }
         for ($index = 0; $index < strlen($data); $index++) {
             $decoded .= $data[$index] ^ $masks[$index % 4];
         }
         return $decoded;
     }
     
     // 返回帧信息处理
     function frame($s) 
     {
         $a = str_split($s, 125);
         if (count($a) == 1) {
             return "\x81" . chr(strlen($a[0])) . $a[0];
         }
         $ns = "";
         foreach ($a as $o) {
             $ns .= "\x81" . chr(strlen($o)) . $o;
         }
         return $ns;
     }
 
     // 返回数据
     function send($client, $msg)
     {
         $msg = $this->frame($msg);
         socket_write($client, $msg, strlen($msg));
     }
 }
  $ws = new WS('127.0.0.1','13528');
?>



ALTER TABLE `a2_kuaidi` ADD `tmp_url` VARCHAR( 255 ) NOT NULL COMMENT '菜鸟面单模板地址' AFTER `wpcode3` ;


 云ERP开发和测试环境的数据模拟：
1、模拟100个店铺有订单，有1个店铺数据占比50%左右。
2、模拟3000件商品，其中代销商品500件，代发商品500件，其中300个sku销量占比80%左右。
3、每天模拟10万订单，自营销售单（70000单，其中有保质期的10000单）、调拨单（3000单）、代发单（10000单）和代销单（20000单）都需要有数据。自营销售单、代发单和代销单都从聚石塔系统来。
4、每个订单都在7天内处理完毕，确保订单数据流程比例和线上处理时差相似。
5、模拟200人仓库员工的模拟作业，配货团队30人左右，分拣人员30人，验货30人，打包60人，码货20人，大库存配货30人。


"encryptedData\":\"AES:rU904rj6UH2oqfSUb43+Z+XlOkZaULeerkScS5xbmfgjZGHz4gle6o\/TrLQdV8wRsrsk0TObjJaJI5n4tAPV1utWhhx7prI3Ovo3PSycmDK0au+\/pem2dkbmxOH6P37SIp2fO83rWO6hljktxETN57u8MYMqnohwq56Th0UEZ1YVnt+MmcGoQ6GBBji6p9ABLQpFo6ia4QhlKCv+cUM\/dMlViBkTjcf60GMVxf4gW2u9TUMZtocMugT890ix3zmVatFKRMKmVJ0P0y+dYffxCbsXcs\/SdQGM24CUj+EnmLeg0OA5NmIptYKjVwsO+UeRkVJ6L2ACSPIe6zhrhcA1uESB53CAAm3HnyINZIzMs6p0EivWwZnyeInha2WrVuBE8HS8nERdTCF186twBRn1oThMf+frYnyEj\/U8n\/n8PTiYhmfkrNzE2GN+Cz4iTAgxJlQxd1gVvS4v5nB7qNfb0f4ZOev4R3\/5QGTJ2qPz+0NRRCNqHpNzqlcOrMw\/eygPd61jo4NXc9Q2EzpOl3mmobvevjwGLvB4hhzRA8H7ddH8ru8e\/ECJWC+9Czrc6LmbXYB9E0BydDqm5vDQXyc2cYamjSziL3MSkDyVCVA13gt+0OZghV\/TgD9SbRxiANgwYiVNLaFqTXOvtxIRWnPQm9bTrR6JJqD8TkUwzEiQU8+7lyMbzMi8D+SOiNfvi0bMZF83dT33p70Xca5K2UeW7v0Fw4yoViSUHP7gB6FwddOg0OA5NmIptYKjVwsO+UeR6eLIY\/ImMscfSVTm7WE24EPBzGv241DVXwp20WPQ\/Drfef0pZ4GcGEWRYryknn6\/wIBHacENHXbRp2T5nwbUxzq8ARRXPEwtCO0e\/I68YWWQT0ikc0UggsaPzkA600bTIJfsYHZnX4fbLsq21qYI+2Cg0CywUSDDggnTaH4BLdSnkqgkdta4egT7dRDTTqxGsN4doTJQe5VgTt17CUCMpg==\",\"signature\":\"MD:qNtaW3ZGfWs9zB18weAIJQ==\",\"templateURL\":\"http:\/\/cloudprint.cainiao.com\/template\/standard\/82907\",\"ver\":\"waybill_print_secret_version_1\"}","waybill_code":"75280002920113"


快递分单，修改快递单号，订单验货，订单重打，预包订单面单打印，补发发票打印
按平台区分 

notes_club@s1 post_notes没有返回期待的内容，判断为失败无执行的权限，请确定已经授权
1321312312312
1321312312312
1321312312311


D19041900001678
D19041900002924

{
    "sender":{
        "address":{
            "province":"浙江省", // 发件人省份
            "city":"杭州市", // 发件人城市
            "district":"余杭区", // 发件人区县
            "town":"蒋村街道", // 发件人城镇
            "detail":"西溪首座B1号楼" // 发件人详细信息
        },
        "name": "菜鸟网络", // 发件人姓名
        "mobile": "13012345678", // 发件人手机号
        "phone": "057112345678" // 发件人固定电话
    }
}


D19042300000255
D19042300000256
D19042300000252
D19042300000253

p c1 p c2 p

p c1 c2 p p

D19041900002921
D19042400000787
D19042300000251
3300005371139


D19042500002275


('D19042800000527','D19042800000528','D19042800000529','D19042800000530','D19042800000531','D19042800000532','D19042800000533','D19042800000534')

http://cloudprint.cainiao.com/template/standard/285459/4

1C00060


ALTER TABLE `w4_reason` ADD `sign` TINYINT( 1 ) NOT NULL COMMENT '原件退回原因标记' AFTER `t_status` ;

ALTER TABLE `w4_return` ADD `rid` INT NOT NULL COMMENT '原件退回原因' AFTER `data_type` ;


D19050700143512
9895349251658,9895349259501

781172008716771275

D19051300088532