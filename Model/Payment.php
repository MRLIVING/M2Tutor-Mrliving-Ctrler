<?php
namespace Mrliving\Ctrler\Model;

use Magento\Framework\App\RequestInterface;
use Mrliving\Ctrler\Api\PaymentInterface;


class Payment implements PaymentInterface {
	protected $_resp;
	protected $_req;

	public function __construct(
		\Magento\Framework\App\ResponseInterface $response,
		\Magento\Framework\Webapi\Rest\Request   $request ) 
	{
		$this->_resp = $response;
		$this->_req = $request;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function response_callback() 
	{
		$oid      = $this->_req->getParam('oid');
		$security = $this->_req->getParam('security');
		$status   = $this->_req->getParam('status');		

		if ('success' === $status) {
			$this->_resp->setRedirect('/checkout/onepage/success')->sendResponse();
			die();
		}
		elseif ('fail' === $status) {
			$this->_resp->setRedirect('/checkout/onepage/failure')->sendResponse();
			die();
		}
		

		$rs = implode(',', [$oid, $security, $status]);
		return $rs;
	}


}

