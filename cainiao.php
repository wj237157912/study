<?php

header("Content-type: text/html; charset=utf-8");

//include "TopSdk.php";

//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,

//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest

class taobao_apiclass{
    public $appkey ;
    public $secretKey ;
    public $session ;
    public $method ;//调用的接口
    public $gatewayUrl = "http://gw.api.tbsandbox.com/router/rest";//"http://gw.api.taobao.com/router/rest";
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
	protected $host = '';
    function __construct() {
        //include_once("inc/warehouse.inc.php");
        //$this->warehouse_class = new warehouse_class;
        $this->current_timestamp = time();//初始化当前时间戳
		$this->host = $_SERVER["HTTP_HOST"];
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
        echo "<br>";
		//print_r($requestUrl);
        echo "<br>";
		$content = @file_get_contents($requestUrl);
        return str_replace(array("\r", "\n", "\r\n", "\n\r", "\t", "\'"), "", $content);
    }

	public function order_create() {
		echo $this->host;
		$order_id1 = "A1232132912321009B";
		$order_id2 = "A1232132912321003B";
 
		$req = array();
		$waybill_apply_new_request = array();
		$waybill_apply_new_request['cp_code']="POSTB";
		$shipping_address = array();
		$shipping_address['area']= "余杭区";
		$shipping_address['province']= "浙江省";
		$shipping_address['town']="";
		$shipping_address['address_detail']= "测试ISV";
		$shipping_address['city']= "杭州市";
		$waybill_apply_new_request['shipping_address'] = $shipping_address;
		$trade_order_info_cols = array();
		$trade_order_info_cols['consignee_name']= '张三';
		$trade_order_info_cols['order_channels_type']="TB";
		$trade_order_info_cols['trade_order_list']= $order_id1;
		$trade_order_info_cols['consignee_phone']="13242422352";
		$consignee_address = array();
		$consignee_address['area']="朝阳区";
		$consignee_address['province']='北京';
		$consignee_address['town']="八里庄";
		$consignee_address['address_detail']="朝阳路高井，财满街，财经中心9号楼21单元6013";
		$consignee_address['city']="北京市";
		$trade_order_info_cols['consignee_address'] = $consignee_address;
		$trade_order_info_cols['sendPhone']="13242422352";
		//$trade_order_info_cols['weight']=intval('1.678123');
		$trade_order_info_cols['sendName']="李四";
		$package_items = array();
		$package_items['item_name']= ("衣服");
		$package_items['count']=123;
		$trade_order_info_cols['package_items'][] = $package_items;
		$package_items = array();
		$package_items['item_name']= ("衣服2");
		$package_items['count']=321;
		$trade_order_info_cols['package_items'][] = $package_items;
		$logistics_service_list = array();
		$tmp['value'] = "NORMAL";
		$logistics_service_list['service_value4_json']=$tmp;
		$logistics_service_list['service_code']="SVC-DELIVERY-ENV";
		//$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		$tmp['value'] = "100.00";
		$tmp['currency'] = "CNY";
		$tmp['payment_type'] = "CASH";
		$logistics_service_list['service_value4_json']=$tmp;
		$logistics_service_list['service_code']="SVC-COD";
		//$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		
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
		//$trade_order_info_cols['logistics_service_list'][] = ($logistics_service_list);
		
		$trade_order_info_cols['product_type']="STANDARD_EXPRESS";
		$trade_order_info_cols['real_user_id']=123232;
		//$trade_order_info_cols['volume']=123;
		$trade_order_info_cols['package_id']=$order_id1;
		$waybill_apply_new_request['trade_order_info_cols'][] = ($trade_order_info_cols);
		/*
		$trade_order_info_cols = array();
		$trade_order_info_cols['consignee_name']= '张三';
		$trade_order_info_cols['order_channels_type']="TB";
		$trade_order_info_cols['trade_order_list']=$order_id2;
		$trade_order_info_cols['consignee_phone']="13242422352";
		$consignee_address = array();
		$consignee_address['area']="朝阳区";
		$consignee_address['province']='北京';
		$consignee_address['town']="八里庄";
		$consignee_address['address_detail']="朝阳路高井，财满街，财经中心9号楼21单元6013";
		$consignee_address['city']="北京市";
		$trade_order_info_cols['consignee_address'] = $consignee_address;
		$trade_order_info_cols['sendPhone']="13242422352";
		$trade_order_info_cols['weight']=123;
		$trade_order_info_cols['sendName']="李四";
		$package_items = array();
		$package_items['item_name']= "衣服";
		$package_items['count']=123;
		$trade_order_info_cols['package_items'][] = $package_items;
		$package_items = array();
		$package_items['item_name']= ("衣服2");
		$package_items['count']=321;
		$trade_order_info_cols['package_items'][] = $package_items;
		$logistics_service_list = array();
		$logistics_service_list['serviceValue4Json']='"{ "value": "100.00","currency": "CNY","ensure_type": "0"}"';
		$logistics_service_list['serviceCode']="SVC-DELIVERY-ENV";
		$trade_order_info_cols['LogisticsServiceList'] = ($logistics_service_list);
		$trade_order_info_cols['product_type']="STANDARD_EXPRESS";
		$trade_order_info_cols['real_user_id']=123232;
		$trade_order_info_cols['volume']=123;
		$trade_order_info_cols['package_id']=$order_id2;
		$waybill_apply_new_request['trade_order_info_cols'][] = $trade_order_info_cols;
		*/
		$req['waybill_apply_new_request'] = json_encode($waybill_apply_new_request,true);
		echo $req['waybill_apply_new_request'];
        $this->method = "cainiao.waybill.ii.get";
        $info = $this->execute($req);
        return $info;
    }

	public function order_cancel() {        
		$waybill_apply_cancel_request['real_user_id']="123232";
		$waybill_apply_cancel_request['trade_order_list']= "A1232132912321336B";
		$waybill_apply_cancel_request['cp_code']="ZTO";
		$waybill_apply_cancel_request['waybill_code']="360005900063";
		$waybill_apply_cancel_request['package_id']="A1232132912321336B";
echo json_encode($waybill_apply_cancel_request,true);
		$WlbWaybillICancelRequest['waybill_apply_cancel_request'] = json_encode($waybill_apply_cancel_request,true);

		$this->method = "taobao.wlb.waybill.i.cancel ";
        $info = $this->execute($WlbWaybillICancelRequest);
        return $info;
    }

	public function get_quantity() {
		$tmp['cp_code'] = "ZTO"; 
        $waybillApplyRequest['waybill_apply_request'] = json_encode($tmp,true);        
		$this->method = "taobao.wlb.waybill.i.search";        
        $info = $this->execute($waybillApplyRequest);
        return $info;
    }

	public function get_detail() {
		$tmp['query_by'] = "1"; 
        $tmp['trade_order_list']= "TA20151009032279"; 
        $waybillApplyRequest['waybill_detail_query_request'] = json_encode($tmp,true);        
		$this->method = "taobao.wlb.waybill.i.querydetail";        
        $info = $this->execute($waybillApplyRequest);
        return $info;
    }
}

$t = new taobao_apiclass;

$t->appkey = "test";
$t->secretKey = "test";
$t->session = "6101e10ef1dedd58141cc0d0196b1c5b0316ea7550a1b6d2074082786";

$resp = $t->order_create();
echo "result:";
printBR();
print_r($resp);
printBR();

//$content = json_decode($resp, true);
//echo $content['wlb_waybill_i_get_response']['waybill_apply_new_cols']['waybill_apply_new_info'][0]["short_address"];
//printBR();
//echo $content['wlb_waybill_i_get_response']['waybill_apply_new_cols']['waybill_apply_new_info'][0]['trade_order_info']['consignee_address']['province'];
//printBR();
//echo $content['wlb_waybill_i_get_response']['waybill_apply_new_cols']['waybill_apply_new_info'][0]['trade_order_info']['consignee_address']['city'];
//printBR();
//echo $content['wlb_waybill_i_get_response']['waybill_apply_new_cols']['waybill_apply_new_info'][0]['trade_order_info']['consignee_address']['address_detail'];
    				    

//printBR();
//$resp = $t->order_cancel();
//print_r($resp);
//printBR();
//$resp = $t->get_quantity();
//print_r($resp);
//printBR();
//$resp = $t->get_detail();
//print_r($resp);
//printBR();

function printBR()
{
	echo "<br>#<br>#";
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
?>