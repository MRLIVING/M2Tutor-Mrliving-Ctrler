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
  * web address: `http://${DOMAIN}/rest/V1/ctrler/payment/response_callback`
  * the API name and function name can be different, e.g., response_callback => resp_cbk
* `method`: php function name, e.g. [PaymentInterface.php#L12](/Api/PaymentInterface.php#L12) => [Payment.php#L23](/Model/Payment.php#L23)
