<?php
/**
 * 首页
 *
 * @author        金哥 <1216547706@qq.com>
 * @since         File available since Release v1.0
 * @copyright     Copyright (c) 2015-2016 . All rights reserved.
 */
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	/**
	 * 订单查询
	 */
	public function index() {
		if ($_GET) {
			$m = M('contact');
			$where['number'] = $_GET['mobile'];
			$contact = $m->field('id,name,number')->where($where)->find();
			if ($contact) {
				$list = M('invoice')->alias('a')->field('a.buId,a.billDate,a.billNo,a.rpAmount')
					->where(array('a.buId' => $contact['id']))->order('a.billDate desc')->select();
				foreach ($list as $key => $val) {
					$list[$key]['sub'] = M('invoice_info')->alias('a')->join('__GOODS__ b ON a.invId=b.id')
						->join('__STORAGE__ c ON b.locationId=c.id')
						->field('a.amount,a.price,a.qty,b.name,b.number,b.unitName,c.name as sname')
						->where(array('a.billNo' => $val['billno']))->select();
				}
				$contact['list'] = $list;
				$this->contact = $contact;
				$this->display();
			} else {
				$this->error('没有查询到此号码的用户信息！');
			}
		} else {
			$this->display();
		}
	}

}
