<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL | E_STRICT);
//include "TopSdk.php";
//include "apitest.php";

//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,

//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest

class taobao_apiclass{
    public $appkey ;
    public $secretKey ;
    public $session ;
    public $method ;//调用的接口
    //public $gatewayUrl = "http://gw.api.tbsandbox.com/router/rest";//"http://gw.api.taobao.com/router/rest";
    public $gatewayUrl = "http://proxy.api.tbsandbox.com/router/rest";
    public $format = "json";
    protected $signMethod = "md5";
    protected $apiVersion = "2.0";
    protected $sdkVersion = "top-sdk-php-20110125";
    protected $api_type = 0;//淘宝接口
    protected $shop_type = 4;//淘宝网订单
    protected $address_type = 4;//选用的地址库
    protected $warehouse_class;
    protected $current_timestamp;
    protected $current_time_id = 0;//每次的同步时间批次ID
    function __construct() {
        //include_once("inc/warehouse.inc.php");
        //$this->warehouse_class = new warehouse_class;
        $this->current_timestamp = time();//初始化当前时间戳
    }
    protected function generateSign($params){
        ksort($params);
        $stringToBeSigned = $this->secretKey;
        foreach ($params as $k => $v){
            if("@" != substr($v, 0, 1)){
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->secretKey;
        return strtoupper(md5($stringToBeSigned));
    }
    /**
     * 组合淘宝API接口URL，获取或者更新需要的信息
     *
     * @param array $apiParams 业务参数
     */
    public function execute($apiParams){
        //组装系统参数
        $sysParams["app_key"] = $this->appkey;
        $sysParams["session"] = $this->session;
        $sysParams["v"] = $this->apiVersion;
        $sysParams["format"] = $this->format;
        $sysParams["sign_method"] = $this->signMethod;
        $sysParams["method"] = $this->method;
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        $sysParams["partner_id"] = $this->sdkVersion;
        //$apiParams 业务参数
        //签名
        $sysParams["sign"] = $this->generateSign(array_merge($apiParams, $sysParams));
        //系统参数放入GET请求串
        $requestUrl = $this->gatewayUrl . "?";
        $sysParams = array_merge($apiParams, $sysParams);
        foreach ($sysParams as $sysParamKey => $sysParamValue){
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }
        $requestUrl = substr($requestUrl, 0, -1);
        $requestUrl = str_replace(" ", "%20", $requestUrl);//去除空格
        //echo "<br>";
		// print_r($requestUrl);
        //echo "<br>";
		$content = @file_get_contents($requestUrl);
        //return str_replace(array("\r", "\n", "\r\n", "\n\r", "\t", "\'"), "", $content);
		$content = preg_replace("/[\\x00-\\x08\\x0b-\\x0c\\x0e-\\x1f]/", '', $content);
        return str_replace(array("\r", "\n", "\r\n", "\n\r", "\t", "\'"), "", $content);
    }

	public function get_order_test() {
		$order_id1 = "A1232132912321006B";
		$order_id2 = "A1232132912321002B";
 
		$req = array();
		$waybill_apply_new_request = array();
		$waybill_apply_new_request['cp_code']="ZTO";
		$shipping_address = array();
		$shipping_address['area']=("余杭区");//urlencode("余杭区");
		$shipping_address['province']= ("浙江省");//urlencode("浙江省");//"北京";
		$shipping_address['town']="";
		$shipping_address['address_detail']= ("测试ISV");//urlencode("测试ISV");
		$shipping_address['city']= ("杭州市");//urlencode("杭州市");
		$waybill_apply_new_request['shipping_address'] = ($shipping_address);
		//$waybill_apply_new_request['shipping_address'] = json_encode(array("area"=>"余杭区","province"=>"浙江省","town"=>"","address_detail"=>"测试ISV","city"=>"杭州市"));
		//$waybill_apply_new_request['shipping_address'] = json_encode(array("area"=>"余杭区","province"=>"浙江省","town"=>"","address_detail"=>"测试ISV","city"=>"杭州市"));
		$trade_order_info_cols = array();
		$trade_order_info_cols['consignee_name']= ('张三');
		$trade_order_info_cols['order_channels_type']="TB";
		$trade_order_info_cols['trade_order_list']= $order_id1;
		$trade_order_info_cols['consignee_phone']="13242422352";
		$consignee_address = array();
		$consignee_address['area']="朝阳区";
		$consignee_address['province']=('北京');//"北京";
		$consignee_address['town']="八里庄";
		$consignee_address['address_detail']=("朝阳路高井，财满街，财经中心9号楼21单元6013");
		$consignee_address['city']="北京市";
		$trade_order_info_cols['consignee_address'] = ($consignee_address);
		$trade_order_info_cols['sendPhone']="13242422352";
		$trade_order_info_cols['weight']=intval('1.678123');
		$trade_order_info_cols['sendName']="李四";
		$package_items = array();
		$package_items['item_name']= ("衣服");
		$package_items['count']=123;
		$trade_order_info_cols['package_items'][] = ($package_items);
		$package_items = array();
		$package_items['item_name']= ("衣服2");
		$package_items['count']=321;
		$trade_order_info_cols['package_items'][] = ($package_items);
		$logistics_service_list = array();
		$tmp['value'] = "NORMAL";
		$logistics_service_list['service_value4_json']=$tmp;
		$logistics_service_list['service_code']="SVC-DELIVERY-ENV";
		$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		$tmp['value'] = "100.00";
		$tmp['currency'] = "CNY";
		$tmp['payment_type'] = "CASH";
		$logistics_service_list['service_value4_json']=$tmp;
		$logistics_service_list['service_code']="SVC-COD";
		$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		
		$tmp = array();
		$logistics_service_list = array();
		$tmp['min'] = "2014-09-09 11:11";
		$tmp['max'] = "2014-09-10 11:11";
		$lt[]=$tmp;
		$tmp = array();
		$tmp['min'] = "2014-09-11 11:11";
		$tmp['max'] = "2014-09-12 11:11";
		$lt[]=$tmp;
		$logistics_service_list['service_value4_json']['value']=$lt;
		$logistics_service_list['service_code']="SVC-DELIVERY-APPOINTMENT";
		$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		
		$trade_order_info_cols['product_type']="STANDARD_EXPRESS";
		$trade_order_info_cols['real_user_id']=123232;
		$trade_order_info_cols['volume']=123;
		$trade_order_info_cols['package_id']=$order_id1;
		$waybill_apply_new_request['trade_order_info_cols'][] = ($trade_order_info_cols);
		/*
		$trade_order_info_cols = array();
		$trade_order_info_cols['consignee_name']= ('张三');
		$trade_order_info_cols['order_channels_type']="TB";
		$trade_order_info_cols['trade_order_list']=$order_id2;
		$trade_order_info_cols['consignee_phone']="13242422352";
		$consignee_address = array();
		$consignee_address['area']="朝阳区";
		$consignee_address['province']=('北京');//"北京";
		$consignee_address['town']="八里庄";
		$consignee_address['address_detail']=("朝阳路高井，财满街，财经中心9号楼21单元6013");
		$consignee_address['city']="北京市";
		$trade_order_info_cols['consignee_address'] = ($consignee_address);
		$trade_order_info_cols['sendPhone']="13242422352";
		$trade_order_info_cols['weight']=123;
		$trade_order_info_cols['sendName']="李四";
		$package_items = array();
		$package_items['item_name']= ("衣服");
		$package_items['count']=123;
		$trade_order_info_cols['package_items'][] = ($package_items);
		$package_items = array();
		$package_items['item_name']= ("衣服2");
		$package_items['count']=321;
		$trade_order_info_cols['package_items'][] = ($package_items);
		$logistics_service_list = array();
		$logistics_service_list['serviceValue4Json']='"{ "value": "100.00","currency": "CNY","ensure_type": "0"}"';
		$logistics_service_list['serviceCode']="SVC-DELIVERY-ENV";
		$trade_order_info_cols['LogisticsServiceList'] = ($logistics_service_list);
		$trade_order_info_cols['product_type']="STANDARD_EXPRESS";
		$trade_order_info_cols['real_user_id']=123232;
		$trade_order_info_cols['volume']=123;
		$trade_order_info_cols['package_id']=$order_id2;
		$waybill_apply_new_request['trade_order_info_cols'][] = ($trade_order_info_cols);
		*/
		$req['waybill_apply_new_request'] = json_encode($waybill_apply_new_request,true);
        var_dump($req);
		//$tmp = json_encode($waybill_apply_new_request,true);;
		//print_r($waybill_apply_new_request);
		//echo ($req['waybill_apply_new_request']);
        $this->method = "taobao.wlb.waybill.i.get";
        $info = $this->execute($req);
		print_r($info);
        //$info = json_decode($info, true);
        return $info;
    }

	public function order_create($orders) {
        if (count($orders) == 0) {
            return array("status" => 0, "info" => "无订单数据");
        }
        
        $this->method = "cainiao.waybill.ii.get";

        $order_data = array();

        $request = array();
        $new_request = array();

        $new_request['cp_code'] = 'ZTO';
        $new_request['need_encrypt'] = true;    
        // 发货人地址信息
        $new_request['sender']['address'] = array(
            'district' => "长宁区",
            'province' => "上海",
            'town' => '',
            'detail' => "测试ISV",
            'city' => "上海市"
        );
        $new_request['sender']['name'] = '猫诚食品';
		$new_request['sender']['phone'] = '4000-798-517';

        $trade_order_info_cols = array();
        $tradeOrderCount = 0;
        $ordersCount = count($orders);
        $tmp_ordersCount = 0;
        $mail_no_array = array();
        $order_id = " ";
        //推数据到快递接口
        foreach ($orders as $k=>$v) {

            $tmp_ordersCount++;
            // 订单数据
            $trade_order_info = array();
            $trade_order_info['object_id'] = $v['order_id'];
            $trade_order_info['order_info'] = array(
                'order_channels_type' => "OTHERS",
                'trade_order_list' => $v['order_id']
            );
            // 收件人地址
            $trade_order_info['recipient']['address'] = array(
                'province' => empty($v['province_name']) ? '上海' : $v['province_name'],
                'city' => empty($v['city_name']) ? '上海市' : $v['city_name'],
                'district' => empty($v['town_name']) ? '徐汇区' : $v['town_name'],
                'town' => '',
                'detail' => $v['address_4']
                
            );
            $trade_order_info['recipient']['name'] = $v['receivername'];
            $trade_order_info['recipient']['mobile'] = empty($v['mobilephone']) ? $v['phone'] : $v['mobilephone'];
			$trade_order_info['recipient']['phone'] = $v['phone'];
            // 商品名称列表
            $trade_order_info['package_info']['items'][] = array(
                'count' => 1,
                'name' => '猫诚食品'
            );
            $trade_order_info['template_url'] = 'http://cloudprint.daily.taobao.net/template/standard/137402/17';
            $trade_order_info['user_id'] = 123232;
            $trade_order_info_cols[] = $trade_order_info;
            $order_id .= ' '.$v['order_id'];

            // 统计单据数
            $tradeOrderCount++;
            // 最多10个提交一次
            if($tradeOrderCount==10 || $tmp_ordersCount==$ordersCount)
            {
                $new_request['trade_order_info_dtos'] = $trade_order_info_cols;
                $request['param_waybill_cloud_print_apply_new_request'] = json_encode($new_request);
                var_dump($request);echo '<br>';
                $request['param_waybill_cloud_print_apply_new_request'] = '{"cp_code":"ZTO","sender":{"address":{"district":"\u957f\u5b81\u533a","province":"\u4e0a\u6d77","town":"","detail":"\u6d4b\u8bd5ISV","city":"\u4e0a\u6d77\u5e02"},"name":"\u738b\u4fca","phone":"13111111111"},"trade_order_info_dtos":[{"object_id":"19999A190404A20","order_info":{"order_channels_type":"OTHERS","trade_order_list":"19999A190404A20"},"recipient":{"address":{"province":"\u6c5f\u82cf\u7701","city":"\u5357\u4eac\u5e02","district":"\u7384\u6b66\u533a","town":"","detail":"11"},"name":"11","mobile":"13111111111","phone":"13111111111"},"package_info":{"items":[{"count":1,"name":"\u98df\u54c1"}]},"template_url":"http:\/\/cloudprint.daily.taobao.net\/template\/standard\/82907\/155","user_id":"2671233560"}],"need_encrypt":true}';
                var_dump($request);echo '<br>';
                $content =  $this->execute($request);
				print_r($content);
				print_r('<br><br><br><br>');
                // 处理大头笔
                if (str_replace('error_response', "", $content) != $content){
                    $this->error_add(1, $content.$order_id);
                }
                else if (str_replace('cainiao_waybill_ii_get_response', "", $content) != $content){
                    $status = 0;
                    $kuaidi_oid = "";
                    $msg = "";
                    $content = json_decode($content, true);

                    //开始获取必要的参数
                    foreach ($content['cainiao_waybill_ii_get_response']['modules']['waybill_cloud_print_response'] as $key => $item) {
                        $print_data = json_decode($item["print_data"], true);
						$short_address = $print_data['data']['routingInfo']['sortation']['name'];
                        $short_address = (empty($short_address)?'':$short_address.' ').$print_data['data']['routingInfo']['routeCode'];
                        if(empty($short_address)) {
                            $str1 = '';
                            $str2 = '';
                            $recipient_address = $print_data['data']['recipient']['address'];
                            if (str_replace('区', '', $recipient_address['district']) != $recipient_address['district']) {
                                $str1 = str_replace('市', '', $recipient_address['city']);
                                $str2 = str_replace('区', '', $recipient_address['district']);
                            }
                            else {
                                $str1 = str_replace('省', '', $recipient_address['province']);
                                $str2 = str_replace('县', '', $recipient_address['district']);
                            }
                            $short_address = $str1.$str2;
                            //大笔头字获取失败的话就用：市+区；省+县
                            if (!empty($short_address)) {
                                $short_address = $recipient_address['province'].$recipient_address['city'].$recipient_address['district'];
                            }
                        }

                        $order_id = htmlspecialchars_decode($item['object_id']);
                        $item_new = array(
                                "order_id" => $order_id,
                                "id" => $order_id,//下单失败时候报错订单号
                                "mail_no" => htmlspecialchars_decode($item["waybill_code"]),//快递单号
                                "mark" => htmlspecialchars_decode($short_address),//大头笔
                                "package_center_code" => htmlspecialchars_decode($print_data['data']['routingInfo']['consolidation']['code']),//集包地目的地中心代码打印时根据该code生成目的地中心的条码
                                "package_center_name" => htmlspecialchars_decode($print_data['data']['routingInfo']['consolidation']['name']),//集包地目的地中心名称
                                //"msg" => htmlspecialchars_decode($item["remark"]),
                                //"keys" => htmlspecialchars_decode($item["keys"]),
                        );
                        if(!empty($item["waybill_code"])) {
                            $item_new["status"] = 1;
                        }
                        else {
                            $item_new["status"] = 0;
                        }
                        $mail_no_array[] = $item_new;
                    }
                }
                else {
                    $this->error_add(1, "未收到有效标识返回值".$content);
                }
                unset($trade_order_info_cols);
                $tradeOrderCount = 0;
                $order_id = " ";
            }
        }
        //开始集中分析返回
        foreach($mail_no_array as $key => $item) {
            $error_level = 0;
            if ($item["status"]) {
                //此单下成功或者已经下成功
                $data_insert = array(
                        "ymd" => date("Ymd"),
                        "order_id" =>  ($item["order_id"]),
                        "kuaidi_oid" =>  ($item["mail_no"]),
                        "kuaidi_name" =>  ('STO'),
                        "timestamp" => time(),
                );
                
				print_r($data_insert);
            }
            else {
                $mail_no_array[$key]["status"] = 0;//下单失败
            }
            $mail_no_array[$key]["error_level"] = $error_level;
            $mail_no_array[$key]["site_name"] = 'sitename';
        }
        //返回信息
        return array("status" => 1, "info" => "通讯成功", "output" => $mail_no_array);
    }

	public function get_quantity() { 

$this->method = "cainiao.waybill.ii.search";

        $tmp['cp_code'] = "STO";
        $content = $this->execute($tmp);
        var_dump($content);
        if (str_replace('cainiao_waybill_ii_search_response', "", $content) != $content){
            $content = json_decode($content,true);
            if (!is_array($content["cainiao_waybill_ii_search_response"])) {
                return array("status" =>0, "info" => "接口报错");
            }
            if($content['cainiao_waybill_ii_search_response']['waybill_apply_subscription_cols']['waybill_apply_subscription_info'][0]['cp_code'] == "STO"){
                $quantity = $content['cainiao_waybill_ii_search_response']['waybill_apply_subscription_cols']['waybill_apply_subscription_info'][0]['branch_account_cols']['waybill_branch_account'][0]['quantity'];
                return array("status" =>1, "info" => "获取成功", "quantity" => $quantity);
            }
            else
            {
                  return array("status" => 0, "info" => "获取失败");
            }
        }
        else
        {
            $this->error_add(1, $content,$kuaidi_no);
            //返回信息
            return array("status" => 0, "info" => "获取失败");
        }

		$this->method = "cainiao.waybill.ii.search";

        $tmp['cp_code'] = "STO";
        $content = $this->execute($tmp);


		print_r($content);
        if (str_replace('cainiao_waybill_ii_search_response', "", $content) != $content){
            $content = json_decode($content,true);
            if (!is_array($content["cainiao_waybill_ii_search_response"])) {
                return array("status" =>0, "info" => "接口报错");
            }
            if($content['cainiao_waybill_ii_search_response']['waybill_apply_subscription_cols']['waybill_apply_subscription_info'][0]['cp_code'] == 'STO'){
                $quantity = $content['cainiao_waybill_ii_search_response']['waybill_apply_subscription_cols']['waybill_apply_subscription_info'][0]['branch_account_cols']['waybill_branch_account'][0]['quantity'];
                return array("status" =>1, "info" => "获取成功", "quantity" => $quantity);
            }
            else
            {
                  return array("status" => 0, "info" => "获取失败");
            }
        }
        else
        {
            $this->error_add(1, $content,$kuaidi_no);
            //返回信息
            return array("status" => 0, "info" => "获取失败");
        }

		$tmp['cp_code'] = ""; 
        //$waybillApplyRequest = json_encode($tmp,true);        
		$this->method = "cainiao.waybill.ii.search";        
        $info = $this->execute($tmp);
        return $info;
    }
	public function get_templates() {
		$tmp = array(); 
        //$waybillApplyRequest = json_encode($tmp,true);        
		$this->method = "cainiao.cloudprint.stdtemplates.get";        
        $info = $this->execute($tmp);
        return $info;
    }
	public function error_add($a, $b){
		echo ' error '.$a.' '.$b;
	}

	//批量取消订单
    public function order_cancel() {
        
        $this->method = "cainiao.waybill.ii.cancel";

        $cancelRequest = array();
            $cancelRequest['cp_code'] = 'ZTO';
            $cancelRequest['waybill_code'] = '123';
            $content = $this->execute($cancelRequest);
			print_r($content);
            if (str_replace(array('"cancel_result":true','cancel detail is not found!'), "", $content) != $content){
                //此单取消成功               
                $this->error_add(5, "电子面单取消成功",'');
            }
            elseif (str_replace(array('invalid detail status'), "", $content) != $content){
                //此单无法取消成功                
                $this->error_add(5, "此单无法取消成功，放弃取消",'');
            }
            elseif (str_replace('waybill service cannot open', "", $content) != $content){
                $this->error_add(1, "电子面单服务不可用",'');
                return array("status" => 0, "info" => "疑是服务不可用或者网络故障");
            }
            else {
                //开始分析错误
                $this->error_add(5, $content,'');
            }
        //返回信息
        return array("status" => 1, "info" => "通讯成功");
    }

	public function get_query() {
		$tmp = array();
        //$tmp['param_list'] = json_encode(array('cp_code'=>'YUNDA','object_id'=>'1','waybill_code'=>'2100120102296'));        
        $tmp['param_list'] = json_encode(array('cp_code'=>'STO','object_id'=>'1','waybill_code'=>'3300002394832'));        
		$this->method = "cainiao.waybill.ii.query.by.waybillcode";        
        $info = $this->execute($tmp);
        return $info;
    }

	public function get_cancel() {
		$tmp = array(); 
        $tmp = (array('cp_code'=>'YUNDA','waybill_code'=>'2100120102291'));        
        //$tmp = json_decode('{"cp_code":"STO","waybill_code":"2100120102289"}',true);       
		$this->method = "cainiao.waybill.ii.cancel";        
        $info = $this->execute($tmp);
        return $info;
    }

	public function get_cancel2() {
		$this->method = "taobao.wlb.waybill.i.cancel";
			$cancelRequest = array();
            $cancelRequest['real_user_id'] = 123;
            $cancelRequest['trade_order_list'] = '123';
            $cancelRequest['cp_code'] = 'sto';
            $cancelRequest['waybill_code'] = '123';
            $cancelRequest['package_id'] = '123';
            $WlbWaybillICancelRequest['waybill_apply_cancel_request'] = json_encode($cancelRequest);
            $content = $this->execute($WlbWaybillICancelRequest);
			return $content;
		}

    public function get_simple() {
        $this->method = "cainiao.cloudprint.stdtemplates.get";        
        $info = $this->execute($tmp);
        return $info;
    }    
}

$t = new taobao_apiclass;

$t->appkey = "test";
$t->secretKey = "test";
$t->session = "61017013e169ce0e3b71bf99a535bc3b0635c5a730c849f2074082786";

$orders[] = array(
'order_id'=> 'A0033',
'province_name'=> '河北',
'city_name'=> '衡水市',
'town_name'=> '饶阳县',
'address_4'=> '河北衡水市饶阳县河北衡水市饶阳县饶阳镇河北省衡水市饶阳县信誉商厦',
'receivername'=> '猫诚',
'mobilephone'=> '130000',
'phone'=> '130000'
);
// $orders[] = array(
// 'order_id'=> 'A0034',
// 'province_name'=> '山东',
// 'city_name'=> '菏泽市',
// 'town_name'=> '成武县',
// 'address_4'=> '宜山路2021',
// 'receivername'=> '猫诚',
// 'mobilephone'=> '130001',
// 'phone'=> '130001'
// );
// $orders[] = array(
// 'order_id'=> 'A0035',
// 'province_name'=> '浙江省',
// 'city_name'=> '宁波市',
// 'town_name'=> '西城区',
// 'address_4'=> '宜山路2022',
// 'receivername'=> '猫诚',
// 'mobilephone'=> '130002',
// 'phone'=> '130002'
// );
//$resp = $t->get_order_test();
//$resp = $t->order_cancel();
// $resp = $t->get_quantity();
// print_r($resp);
// $resp = $t->get_query();
$resp = $t->order_create($orders);
// $rs = $t->get_simple();
// var_dump($rs);

//echo "result:";
//printBR();
//print_r($resp);
//printBR();
//$array = object_array($resp);
if(!is_array($resp))
print_r(json_decode($resp,true));
else
print_r($resp);
//printBR();

function printBR()
{
	echo "<br>#<br>#<br>";
}

function object_array($array){
  if(is_object($array)){
    $array = (array)$array;
  }
  if(is_array($array)){
    foreach($array as $key=>$value){
      $array[$key] = object_array($value);
    }
  }
  return $array;
} 

//$array = object_array($resp);
//print_r($array);
/*
// 发货人地址信息
        $new_request['sender']['address'] = array(
            'province' => "上海",
            'city' => "上海市",
            'district' => "松江区",
            'town' => '',
            'detail' => "新桥镇新飞路1756号3号仓库"
        );
*/
?>