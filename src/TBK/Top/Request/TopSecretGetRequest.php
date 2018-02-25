<?php
namespace Sixteener\TaoBaoSDK\TBK\Top\Request;
/**
 * TOP API: taobao.Top.secret.get Request
 * 
 * @author auto create
 * @since 1.0, 2016.08.19
 */
use Sixteener\TaoBaoSDK\TBK\Top\RequestCheckUtil;
class TopSecretGetRequest
{
	/** 
	 * 自定义用户id
	 **/
	private $customerUserId;
	
	/** 
	 * 伪随机数
	 **/
	private $randomNum;
	
	/** 
	 * 秘钥版本号
	 **/
	private $secretVersion;
	
	private $apiParas = array();
	
	public function setCustomerUserId($customerUserId)
	{
		$this->customerUserId = $customerUserId;
		$this->apiParas["customer_user_id"] = $customerUserId;
	}

	public function getCustomerUserId()
	{
		return $this->customerUserId;
	}

	public function setRandomNum($randomNum)
	{
		$this->randomNum = $randomNum;
		$this->apiParas["random_num"] = $randomNum;
	}

	public function getRandomNum()
	{
		return $this->randomNum;
	}

	public function setSecretVersion($secretVersion)
	{
		$this->secretVersion = $secretVersion;
		$this->apiParas["secret_version"] = $secretVersion;
	}

	public function getSecretVersion()
	{
		return $this->secretVersion;
	}

	public function getApiMethodName()
	{
		return "taobao.Top.secret.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->randomNum,"randomNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
