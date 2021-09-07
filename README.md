# M2Tutor-Mrliving-Ctrler


## Hosted payment Callback and Redirection via Web API

### webapi.xml (`etc/webapi.xml`)
```
<route url="/V1/ctrler/payment/response_callback" method="GET">
    <service class="Mrliving\Ctrler\Api\PaymentInterface" method="response_callback"/>
    <resources>
        <resource ref="anonymous"/>
    </resources>
</route>
```
* route
  * `url`: the suffix of the HTTP path 
    * the full REST API url: `http://${DOMAIN}/rest/` + `${route url}`, i.e., `http://${DOMAIN}/rest/V1/ctrler/payment/response_callback`
    * the API name and the method name is able to be different, e.g., `response_callback` => `resp_cbk`
  * `method`: the name of the interface method, i.e., [PaymentInterface.php#L12](/Api/PaymentInterface.php#L12) => [Payment.php#L23](/Model/Payment.php#L23)
* service
  * `class`: the corresponding interface 

### API interface (`Api/PaymentInterface.php`)
```
interface PaymentInterface
{
	/**
	 * GET for Post api
	 * @return string
	 */
	public function response_callback();
}
```

### di.xml (`etc/di.xml`)
```
<preference for="Mrliving\Ctrler\Api\PaymentInterface" 
            type="Mrliving\Ctrler\Model\Payment"/>
```
Here we defined the interface and the implementation where the REST API call to. 
* `for`: the interface of the REST API
* `type`: the class where we implemented the interface




## Reference
* [https://inchoo.net/magento-2/magento-2-custom-api/](https://inchoo.net/magento-2/magento-2-custom-api/)
