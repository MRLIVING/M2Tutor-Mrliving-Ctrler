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
* `url`: the suffix of the HTTP path 
  * the full REST resource url: `http://${DOMAIN}/rest/` + `${route url}`, i.e., `http://${DOMAIN}/rest/V1/ctrler/payment/response_callback`
  * the API name and the method name is able to be different, e.g., `response_callback` => `resp_cbk`
* `method`: the name of the interface method, i.e., [PaymentInterface.php#L12](/Api/PaymentInterface.php#L12) => [Payment.php#L23](/Model/Payment.php#L23)

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
