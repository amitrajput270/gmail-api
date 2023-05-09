# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## api/gmail/reply




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gmail/reply" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gmail/reply"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "ERR",
    "status": "The id field is required."
}
```
<div id="execution-results-GETapi-gmail-reply" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gmail-reply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gmail-reply"></code></pre>
</div>
<div id="execution-error-GETapi-gmail-reply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gmail-reply"></code></pre>
</div>
<form id="form-GETapi-gmail-reply" data-method="GET" data-path="api/gmail/reply" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gmail-reply', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gmail-reply" onclick="tryItOut('GETapi-gmail-reply');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gmail-reply" onclick="cancelTryOut('GETapi-gmail-reply');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gmail-reply" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gmail/reply</code></b>
</p>
</form>


## api/gmail/send




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gmail/send" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gmail/send"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "ERR",
    "status": "The to field is required."
}
```
<div id="execution-results-GETapi-gmail-send" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gmail-send"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gmail-send"></code></pre>
</div>
<div id="execution-error-GETapi-gmail-send" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gmail-send"></code></pre>
</div>
<form id="form-GETapi-gmail-send" data-method="GET" data-path="api/gmail/send" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gmail-send', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gmail-send" onclick="tryItOut('GETapi-gmail-send');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gmail-send" onclick="cancelTryOut('GETapi-gmail-send');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gmail-send" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gmail/send</code></b>
</p>
</form>


## api/gmail/allInboxEmails




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gmail/allInboxEmails" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gmail/allInboxEmails"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "ERR",
    "status": "invalid json token",
    "data": "#0 \/var\/www\/gmailWrapper\/app\/Http\/Controllers\/GmailController.php(360): Google\\Client->setAccessToken(Array)\n#1 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php(54): App\\Http\\Controllers\\GmailController->allInboxEmails()\n#2 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('allInboxEmails', Array)\n#3 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php(239): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\GmailController), 'allInboxEmails')\n#4 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php(196): Illuminate\\Routing\\Route->runController()\n#5 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(685): Illuminate\\Routing\\Route->run()\n#6 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(128): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#7 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php(41): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#8 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#9 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php(59): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#10 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Routing\\Middleware\\ThrottleRequests->handle(Object(Illuminate\\Http\\Request), Object(Closure), 60, '1')\n#11 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#12 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(687): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(662): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#14 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(628): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#15 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(617): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#16 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(165): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#17 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(128): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#18 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#19 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#22 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#23 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#24 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php(63): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#25 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 \/var\/www\/gmailWrapper\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php(52): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Fruitcake\\Cors\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#28 \/var\/www\/gmailWrapper\/vendor\/fideloper\/proxy\/src\/TrustProxies.php(57): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#29 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Fideloper\\Proxy\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#30 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#31 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(140): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(109): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#33 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(324): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#34 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(305): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->callLaravelOrLumenRoute(Object(Illuminate\\Http\\Request))\n#35 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(76): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeApiCall(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#36 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(51): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeResponseCall(Object(Illuminate\\Routing\\Route), Array, Array)\n#37 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(41): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeResponseCallIfEnabledAndNoSuccessResponses(Object(Illuminate\\Routing\\Route), Array, Array)\n#38 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(236): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->__invoke(Object(Illuminate\\Routing\\Route), Object(ReflectionClass), Object(ReflectionMethod), Array, Array)\n#39 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(172): Knuckles\\Scribe\\Extracting\\Generator->iterateThroughStrategies('responses', Array, Array)\n#40 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(127): Knuckles\\Scribe\\Extracting\\Generator->fetchResponses(Object(ReflectionClass), Object(ReflectionMethod), Object(Illuminate\\Routing\\Route), Array, Array)\n#41 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php(119): Knuckles\\Scribe\\Extracting\\Generator->processRoute(Object(Illuminate\\Routing\\Route), Array)\n#42 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php(73): Knuckles\\Scribe\\Commands\\GenerateDocumentation->processRoutes(Array)\n#43 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(36): Knuckles\\Scribe\\Commands\\GenerateDocumentation->handle(Object(Knuckles\\Scribe\\Matching\\RouteMatcher))\n#44 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php(37): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#45 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#46 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#47 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#48 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php(134): Illuminate\\Container\\Container->call(Array)\n#49 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Command\/Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#50 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#51 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Knuckles\\Scribe\\Commands\\GenerateDocumentation), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#53 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#54 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#55 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#56 \/var\/www\/gmailWrapper\/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#57 {main}"
}
```
<div id="execution-results-GETapi-gmail-allInboxEmails" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gmail-allInboxEmails"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gmail-allInboxEmails"></code></pre>
</div>
<div id="execution-error-GETapi-gmail-allInboxEmails" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gmail-allInboxEmails"></code></pre>
</div>
<form id="form-GETapi-gmail-allInboxEmails" data-method="GET" data-path="api/gmail/allInboxEmails" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gmail-allInboxEmails', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gmail-allInboxEmails" onclick="tryItOut('GETapi-gmail-allInboxEmails');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gmail-allInboxEmails" onclick="cancelTryOut('GETapi-gmail-allInboxEmails');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gmail-allInboxEmails" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/gmail/allInboxEmails</code></b>
</p>
</form>


## api/gmail/logout




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gmail/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gmail/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "ERR",
    "status": "invalid json token",
    "data": "#0 \/var\/www\/gmailWrapper\/app\/Http\/Controllers\/GmailController.php(490): Google\\Client->setAccessToken(Array)\n#1 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php(54): App\\Http\\Controllers\\GmailController->logout()\n#2 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('logout', Array)\n#3 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php(239): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\GmailController), 'logout')\n#4 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php(196): Illuminate\\Routing\\Route->runController()\n#5 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(685): Illuminate\\Routing\\Route->run()\n#6 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(128): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#7 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php(41): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#8 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#9 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php(59): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#10 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Routing\\Middleware\\ThrottleRequests->handle(Object(Illuminate\\Http\\Request), Object(Closure), 60, '1')\n#11 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#12 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(687): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#13 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(662): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#14 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(628): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#15 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php(617): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#16 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(165): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))\n#17 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(128): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#18 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#19 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#20 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#22 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#23 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#24 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php(63): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#25 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#26 \/var\/www\/gmailWrapper\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php(52): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#27 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Fruitcake\\Cors\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#28 \/var\/www\/gmailWrapper\/vendor\/fideloper\/proxy\/src\/TrustProxies.php(57): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#29 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(167): Fideloper\\Proxy\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#30 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#31 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(140): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php(109): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#33 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(324): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#34 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(305): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->callLaravelOrLumenRoute(Object(Illuminate\\Http\\Request))\n#35 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(76): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeApiCall(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#36 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(51): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeResponseCall(Object(Illuminate\\Routing\\Route), Array, Array)\n#37 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php(41): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->makeResponseCallIfEnabledAndNoSuccessResponses(Object(Illuminate\\Routing\\Route), Array, Array)\n#38 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(236): Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls->__invoke(Object(Illuminate\\Routing\\Route), Object(ReflectionClass), Object(ReflectionMethod), Array, Array)\n#39 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(172): Knuckles\\Scribe\\Extracting\\Generator->iterateThroughStrategies('responses', Array, Array)\n#40 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php(127): Knuckles\\Scribe\\Extracting\\Generator->fetchResponses(Object(ReflectionClass), Object(ReflectionMethod), Object(Illuminate\\Routing\\Route), Array, Array)\n#41 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php(119): Knuckles\\Scribe\\Extracting\\Generator->processRoute(Object(Illuminate\\Routing\\Route), Array)\n#42 \/var\/www\/gmailWrapper\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php(73): Knuckles\\Scribe\\Commands\\GenerateDocumentation->processRoutes(Array)\n#43 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(36): Knuckles\\Scribe\\Commands\\GenerateDocumentation->handle(Object(Knuckles\\Scribe\\Matching\\RouteMatcher))\n#44 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php(37): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#45 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#46 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#47 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php(596): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#48 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php(134): Illuminate\\Container\\Container->call(Array)\n#49 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Command\/Command.php(298): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#50 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#51 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(1040): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Knuckles\\Scribe\\Commands\\GenerateDocumentation), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#53 \/var\/www\/gmailWrapper\/vendor\/symfony\/console\/Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#54 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php(93): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#55 \/var\/www\/gmailWrapper\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#56 \/var\/www\/gmailWrapper\/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#57 {main}"
}
```
<div id="execution-results-GETapi-gmail-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gmail-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gmail-logout"></code></pre>
</div>
<div id="execution-error-GETapi-gmail-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gmail-logout"></code></pre>
</div>
<form id="form-GETapi-gmail-logout" data-method="GET" data-path="api/gmail/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gmail-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gmail-logout" onclick="tryItOut('GETapi-gmail-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gmail-logout" onclick="cancelTryOut('GETapi-gmail-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gmail-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gmail/logout</code></b>
</p>
</form>


## api/gmail/login




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gmail/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gmail/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=910194447018-7slesvefjhua5u8v5mue5bvkdsau1qn2.apps.googleusercontent.com&amp;redirect_uri=http%3A%20%2F%2F127.0.0.1%3A8000%2Foauth%2Fgmail%2Fcallback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.readonly%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.send%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.compose%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.modify%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.labels%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.metadata%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.basic%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.sharing&amp;approval_prompt=force'" />

        <title>Redirecting to https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=910194447018-7slesvefjhua5u8v5mue5bvkdsau1qn2.apps.googleusercontent.com&amp;redirect_uri=http%3A%20%2F%2F127.0.0.1%3A8000%2Foauth%2Fgmail%2Fcallback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.readonly%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.send%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.compose%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.modify%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.labels%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.metadata%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.basic%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.sharing&amp;approval_prompt=force</title>
    </head>
    <body>
        Redirecting to <a href="https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=910194447018-7slesvefjhua5u8v5mue5bvkdsau1qn2.apps.googleusercontent.com&amp;redirect_uri=http%3A%20%2F%2F127.0.0.1%3A8000%2Foauth%2Fgmail%2Fcallback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.readonly%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.send%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.compose%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.modify%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.labels%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.metadata%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.basic%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.sharing&amp;approval_prompt=force">https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=910194447018-7slesvefjhua5u8v5mue5bvkdsau1qn2.apps.googleusercontent.com&amp;redirect_uri=http%3A%20%2F%2F127.0.0.1%3A8000%2Foauth%2Fgmail%2Fcallback&amp;state&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.readonly%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.send%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.compose%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.modify%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.labels%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.metadata%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.basic%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fgmail.settings.sharing&amp;approval_prompt=force</a>.
    </body>
</html>
```
<div id="execution-results-GETapi-gmail-login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gmail-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gmail-login"></code></pre>
</div>
<div id="execution-error-GETapi-gmail-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gmail-login"></code></pre>
</div>
<form id="form-GETapi-gmail-login" data-method="GET" data-path="api/gmail/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gmail-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gmail-login" onclick="tryItOut('GETapi-gmail-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gmail-login" onclick="cancelTryOut('GETapi-gmail-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gmail-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gmail/login</code></b>
</p>
</form>


## api/employees/getChildNodes




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/employees/getChildNodes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/employees/getChildNodes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "TXN",
    "status": "Child nodes fetched successfully.",
    "data": {
        "id": 0,
        "name": "All",
        "children": [
            {
                "id": 27,
                "name": "Mohd. Qasim",
                "userId": 33,
                "parentId": 0,
                "children": [
                    {
                        "id": 28,
                        "name": "Bokali Awomi",
                        "userId": 34,
                        "parentId": 27
                    },
                    {
                        "id": 29,
                        "name": "Amit Kumar Tiwari",
                        "userId": 35,
                        "parentId": 27,
                        "children": [
                            {
                                "id": 34,
                                "name": "Ashraf Ray",
                                "userId": 40,
                                "parentId": 29
                            },
                            {
                                "id": 82,
                                "name": "Jatin Khanna",
                                "userId": 95,
                                "parentId": 29
                            },
                            {
                                "id": 160,
                                "name": "VIVEK TANWAR",
                                "userId": 173,
                                "parentId": 29
                            },
                            {
                                "id": 186,
                                "name": "Abhishek Soy",
                                "userId": 191,
                                "parentId": 29
                            },
                            {
                                "id": 191,
                                "name": "Manmohan Sharma",
                                "userId": 196,
                                "parentId": 29
                            },
                            {
                                "id": 193,
                                "name": "Mukul Thakur",
                                "userId": 202,
                                "parentId": 29
                            },
                            {
                                "id": 195,
                                "name": "Neeti Sharma",
                                "userId": 204,
                                "parentId": 29
                            }
                        ]
                    },
                    {
                        "id": 33,
                        "name": "Jai Kumar",
                        "userId": 39,
                        "parentId": 27
                    },
                    {
                        "id": 37,
                        "name": "Saksham Mishra",
                        "userId": 43,
                        "parentId": 27
                    },
                    {
                        "id": 39,
                        "name": "Hrithik Kohli",
                        "userId": 45,
                        "parentId": 27
                    },
                    {
                        "id": 48,
                        "name": "Farhan Murtaza",
                        "userId": 54,
                        "parentId": 27
                    },
                    {
                        "id": 69,
                        "name": "Akriti Srivastava",
                        "userId": 82,
                        "parentId": 27
                    },
                    {
                        "id": 70,
                        "name": "Arjun Singh",
                        "userId": 83,
                        "parentId": 27
                    },
                    {
                        "id": 157,
                        "name": "Parth Shukla",
                        "userId": 170,
                        "parentId": 27
                    },
                    {
                        "id": 158,
                        "name": "Neeraj Kumar",
                        "userId": 171,
                        "parentId": 27
                    },
                    {
                        "id": 164,
                        "name": "Gaurav",
                        "userId": 178,
                        "parentId": 27
                    },
                    {
                        "id": 185,
                        "name": "Adarsh Jha",
                        "userId": 190,
                        "parentId": 27
                    },
                    {
                        "id": 187,
                        "name": "Ujjwal Bhatt",
                        "userId": 192,
                        "parentId": 27
                    },
                    {
                        "id": 190,
                        "name": "Anurag Sarkar",
                        "userId": 195,
                        "parentId": 27
                    },
                    {
                        "id": 197,
                        "name": "Nisha Khan",
                        "userId": 206,
                        "parentId": 27
                    },
                    {
                        "id": 210,
                        "name": "Sarthak Pandit",
                        "userId": 219,
                        "parentId": 27
                    },
                    {
                        "id": 211,
                        "name": "Sarthak Tiwari",
                        "userId": 220,
                        "parentId": 27
                    },
                    {
                        "id": 214,
                        "name": "Bhagya Vatnani",
                        "userId": 223,
                        "parentId": 27
                    }
                ]
            },
            {
                "id": 30,
                "name": "Naman Mishra",
                "userId": 36,
                "parentId": 0
            },
            {
                "id": 31,
                "name": "Mousumi Debbarma",
                "userId": 37,
                "parentId": 0
            },
            {
                "id": 32,
                "name": "Craig Reilly",
                "userId": 38,
                "parentId": 0
            },
            {
                "id": 50,
                "name": "Office(Rahul)",
                "userId": 62,
                "parentId": 0,
                "children": [
                    {
                        "id": 65,
                        "name": "Surat Sahni",
                        "userId": 78,
                        "parentId": 50
                    },
                    {
                        "id": 181,
                        "name": "Mohd Washim Khan",
                        "userId": 186,
                        "parentId": 50
                    },
                    {
                        "id": 189,
                        "name": "Kunwar Pal",
                        "userId": 194,
                        "parentId": 50
                    }
                ]
            },
            {
                "id": 63,
                "name": "Kausar Jahan Raza",
                "userId": 76,
                "parentId": 0
            },
            {
                "id": 66,
                "name": "krishan arora",
                "userId": 79,
                "parentId": 0
            },
            {
                "id": 67,
                "name": "sameeer",
                "userId": 80,
                "parentId": 0
            },
            {
                "id": 68,
                "name": "nandini",
                "userId": 81,
                "parentId": 0
            },
            {
                "id": 75,
                "name": "Mashhood Raza Azka",
                "userId": 88,
                "parentId": 0,
                "children": [
                    {
                        "id": 115,
                        "name": "Niharika Arora",
                        "userId": 128,
                        "parentId": 75,
                        "children": [
                            {
                                "id": 78,
                                "name": "Pankaj Kaushik",
                                "userId": 91,
                                "parentId": 115
                            },
                            {
                                "id": 134,
                                "name": "Nidhi Sood",
                                "userId": 147,
                                "parentId": 115,
                                "children": [
                                    {
                                        "id": 105,
                                        "name": "Priya Agarwal",
                                        "userId": 118,
                                        "parentId": 134
                                    },
                                    {
                                        "id": 112,
                                        "name": "Saurabh Sharma",
                                        "userId": 125,
                                        "parentId": 134
                                    }
                                ]
                            },
                            {
                                "id": 156,
                                "name": "Surbhi Shridhar",
                                "userId": 169,
                                "parentId": 115,
                                "children": [
                                    {
                                        "id": 114,
                                        "name": "Richa Mishra",
                                        "userId": 127,
                                        "parentId": 156
                                    }
                                ]
                            },
                            {
                                "id": 165,
                                "name": "Gargi Tomar",
                                "userId": 179,
                                "parentId": 115
                            }
                        ]
                    }
                ]
            },
            {
                "id": 77,
                "name": "Bina Das",
                "userId": 90,
                "parentId": 0
            },
            {
                "id": 79,
                "name": "Shabnam",
                "userId": 92,
                "parentId": 0
            },
            {
                "id": 80,
                "name": "Zoya Shabab",
                "userId": 93,
                "parentId": 0
            },
            {
                "id": 85,
                "name": "Rohit Kishore",
                "userId": 98,
                "parentId": 0,
                "children": [
                    {
                        "id": 71,
                        "name": "Riffat Tabassum",
                        "userId": 84,
                        "parentId": 85,
                        "children": [
                            {
                                "id": 74,
                                "name": "Rahul Mandal",
                                "userId": 87,
                                "parentId": 71,
                                "children": [
                                    {
                                        "id": 108,
                                        "name": "kanhaiya",
                                        "userId": 121,
                                        "parentId": 74
                                    }
                                ]
                            },
                            {
                                "id": 113,
                                "name": "Ishika Goyal",
                                "userId": 126,
                                "parentId": 71
                            },
                            {
                                "id": 144,
                                "name": "Sakshi Verma",
                                "userId": 157,
                                "parentId": 71
                            }
                        ]
                    },
                    {
                        "id": 84,
                        "name": "Ravi Srivastava",
                        "userId": 97,
                        "parentId": 85,
                        "children": [
                            {
                                "id": 89,
                                "name": "MD Aznash Khan",
                                "userId": 102,
                                "parentId": 84
                            },
                            {
                                "id": 136,
                                "name": "Rishi Panwar",
                                "userId": 149,
                                "parentId": 84
                            },
                            {
                                "id": 138,
                                "name": "Jagdeep Singh",
                                "userId": 151,
                                "parentId": 84,
                                "children": [
                                    {
                                        "id": 110,
                                        "name": "Sonam Kumari",
                                        "userId": 123,
                                        "parentId": 138
                                    }
                                ]
                            },
                            {
                                "id": 140,
                                "name": "Vinay",
                                "userId": 153,
                                "parentId": 84
                            },
                            {
                                "id": 167,
                                "name": "ABHISHEK KUMAR",
                                "userId": 181,
                                "parentId": 84
                            }
                        ]
                    },
                    {
                        "id": 87,
                        "name": "Anurag Sarkar",
                        "userId": 100,
                        "parentId": 85
                    },
                    {
                        "id": 91,
                        "name": "Shashank Sharma",
                        "userId": 104,
                        "parentId": 85
                    },
                    {
                        "id": 103,
                        "name": "Mohammad Ikram",
                        "userId": 116,
                        "parentId": 85
                    },
                    {
                        "id": 131,
                        "name": "Rohit Saraswat",
                        "userId": 144,
                        "parentId": 85,
                        "children": [
                            {
                                "id": 153,
                                "name": "Shivam Pandey",
                                "userId": 166,
                                "parentId": 131
                            }
                        ]
                    },
                    {
                        "id": 135,
                        "name": "Rashmi Yadav",
                        "userId": 148,
                        "parentId": 85,
                        "children": [
                            {
                                "id": 90,
                                "name": "Gargi Gupta",
                                "userId": 103,
                                "parentId": 135
                            },
                            {
                                "id": 95,
                                "name": "Kapil Kumar Singh",
                                "userId": 108,
                                "parentId": 135
                            },
                            {
                                "id": 100,
                                "name": "Niraj Jitendra Sharma",
                                "userId": 113,
                                "parentId": 135
                            },
                            {
                                "id": 143,
                                "name": "Srishti Singh",
                                "userId": 156,
                                "parentId": 135
                            },
                            {
                                "id": 145,
                                "name": "Rashi Rajput",
                                "userId": 158,
                                "parentId": 135
                            },
                            {
                                "id": 148,
                                "name": "MD. Tarique Rehman",
                                "userId": 161,
                                "parentId": 135
                            },
                            {
                                "id": 151,
                                "name": "Mithul Nair",
                                "userId": 164,
                                "parentId": 135
                            },
                            {
                                "id": 169,
                                "name": "maanvi gupta",
                                "userId": 183,
                                "parentId": 135
                            },
                            {
                                "id": 170,
                                "name": "Priya Roy",
                                "userId": 184,
                                "parentId": 135
                            }
                        ]
                    },
                    {
                        "id": 147,
                        "name": "Sakshi Jain",
                        "userId": 160,
                        "parentId": 85,
                        "children": [
                            {
                                "id": 81,
                                "name": "Saba Zehra",
                                "userId": 94,
                                "parentId": 147
                            },
                            {
                                "id": 83,
                                "name": "Avinash Kumar",
                                "userId": 96,
                                "parentId": 147
                            },
                            {
                                "id": 88,
                                "name": "Bharat Kumar Dixit",
                                "userId": 101,
                                "parentId": 147
                            },
                            {
                                "id": 101,
                                "name": "Munmun Kumari",
                                "userId": 114,
                                "parentId": 147
                            },
                            {
                                "id": 102,
                                "name": "Parmeet Kaur",
                                "userId": 115,
                                "parentId": 147
                            },
                            {
                                "id": 104,
                                "name": "Lalit Upadhyay",
                                "userId": 117,
                                "parentId": 147
                            },
                            {
                                "id": 117,
                                "name": "Babar Javaid",
                                "userId": 130,
                                "parentId": 147,
                                "children": [
                                    {
                                        "id": 76,
                                        "name": "Samir Kumar",
                                        "userId": 89,
                                        "parentId": 117
                                    },
                                    {
                                        "id": 97,
                                        "name": "Aftab Hussain",
                                        "userId": 110,
                                        "parentId": 117,
                                        "children": [
                                            {
                                                "id": 111,
                                                "name": "Amit Kumar Baranwal",
                                                "userId": 124,
                                                "parentId": 97
                                            },
                                            {
                                                "id": 168,
                                                "name": "Nakul",
                                                "userId": 182,
                                                "parentId": 97
                                            }
                                        ]
                                    },
                                    {
                                        "id": 98,
                                        "name": "Mohammad Adnan",
                                        "userId": 111,
                                        "parentId": 117
                                    },
                                    {
                                        "id": 99,
                                        "name": "Arif Zamal Siddiqui",
                                        "userId": 112,
                                        "parentId": 117
                                    },
                                    {
                                        "id": 130,
                                        "name": "Inderkant",
                                        "userId": 143,
                                        "parentId": 117
                                    },
                                    {
                                        "id": 133,
                                        "name": "Himanshu Sharma",
                                        "userId": 146,
                                        "parentId": 117,
                                        "children": [
                                            {
                                                "id": 92,
                                                "name": "Sakshi Rastogi",
                                                "userId": 105,
                                                "parentId": 133
                                            },
                                            {
                                                "id": 96,
                                                "name": "Anuj Kumar",
                                                "userId": 109,
                                                "parentId": 133
                                            }
                                        ]
                                    },
                                    {
                                        "id": 141,
                                        "name": "Navdeep",
                                        "userId": 154,
                                        "parentId": 117
                                    }
                                ]
                            },
                            {
                                "id": 132,
                                "name": "Sudhir Kumar",
                                "userId": 145,
                                "parentId": 147,
                                "children": [
                                    {
                                        "id": 109,
                                        "name": "Brijesh Kannaujiya",
                                        "userId": 122,
                                        "parentId": 132
                                    },
                                    {
                                        "id": 123,
                                        "name": "Priyanka Singh",
                                        "userId": 136,
                                        "parentId": 132
                                    },
                                    {
                                        "id": 125,
                                        "name": "Alamdeen Siddiqui",
                                        "userId": 138,
                                        "parentId": 132
                                    }
                                ]
                            },
                            {
                                "id": 161,
                                "name": "Prashant Sharma",
                                "userId": 174,
                                "parentId": 147,
                                "children": [
                                    {
                                        "id": 106,
                                        "name": "Sarandeep Kaur",
                                        "userId": 119,
                                        "parentId": 161
                                    },
                                    {
                                        "id": 139,
                                        "name": "Malik Shuaib",
                                        "userId": 152,
                                        "parentId": 161
                                    }
                                ]
                            },
                            {
                                "id": 162,
                                "name": "Pranav Kumar Mishra",
                                "userId": 176,
                                "parentId": 147
                            },
                            {
                                "id": 194,
                                "name": "Abdullah Riaz",
                                "userId": 203,
                                "parentId": 147,
                                "children": [
                                    {
                                        "id": 150,
                                        "name": "Sunny",
                                        "userId": 163,
                                        "parentId": 194
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        "id": 155,
                        "name": "Neha bakshi",
                        "userId": 168,
                        "parentId": 85
                    },
                    {
                        "id": 166,
                        "name": "Suvajit Banerjee",
                        "userId": 180,
                        "parentId": 85
                    }
                ]
            },
            {
                "id": 86,
                "name": "Dummy13",
                "userId": 99,
                "parentId": 0
            },
            {
                "id": 93,
                "name": "Prashant Kumar Upadhyay",
                "userId": 106,
                "parentId": 0
            },
            {
                "id": 94,
                "name": "Rohit Singh",
                "userId": 107,
                "parentId": 0
            },
            {
                "id": 107,
                "name": "Agrika Dixit",
                "userId": 120,
                "parentId": 0
            },
            {
                "id": 116,
                "name": "Dummy43",
                "userId": 129,
                "parentId": 0
            },
            {
                "id": 118,
                "name": "Dummy45",
                "userId": 131,
                "parentId": 0
            },
            {
                "id": 119,
                "name": "Noor Saba",
                "userId": 132,
                "parentId": 0
            },
            {
                "id": 120,
                "name": "Dishani Dcosta Mandal",
                "userId": 133,
                "parentId": 0
            },
            {
                "id": 121,
                "name": "Nida Zehra",
                "userId": 134,
                "parentId": 0
            },
            {
                "id": 122,
                "name": "Saddam Hussain",
                "userId": 135,
                "parentId": 0
            },
            {
                "id": 124,
                "name": "Mohan",
                "userId": 137,
                "parentId": 0
            },
            {
                "id": 126,
                "name": "Akansha Chaterji",
                "userId": 139,
                "parentId": 0
            },
            {
                "id": 127,
                "name": "Uma Maheshwari",
                "userId": 140,
                "parentId": 0
            },
            {
                "id": 128,
                "name": "Dummy55",
                "userId": 141,
                "parentId": 0
            },
            {
                "id": 129,
                "name": "Dummy 56",
                "userId": 142,
                "parentId": 0
            },
            {
                "id": 137,
                "name": "Ankita Gupta",
                "userId": 150,
                "parentId": 0
            },
            {
                "id": 142,
                "name": "Dummy 69",
                "userId": 155,
                "parentId": 0
            },
            {
                "id": 146,
                "name": "Dummy 73",
                "userId": 159,
                "parentId": 0
            },
            {
                "id": 149,
                "name": "Aman Singh Negi",
                "userId": 162,
                "parentId": 0
            },
            {
                "id": 152,
                "name": "Kanhiya",
                "userId": 165,
                "parentId": 0
            },
            {
                "id": 154,
                "name": "Sanobar ismail",
                "userId": 167,
                "parentId": 0
            },
            {
                "id": 159,
                "name": "DEV CHAUHAN",
                "userId": 172,
                "parentId": 0
            },
            {
                "id": 163,
                "name": "Mohd Aamir",
                "userId": 177,
                "parentId": 0
            },
            {
                "id": 180,
                "name": "Amir Azam Khan",
                "userId": 185,
                "parentId": 0
            },
            {
                "id": 182,
                "name": "Akanksha",
                "userId": 187,
                "parentId": 0
            },
            {
                "id": 183,
                "name": "Khumja Debbarma",
                "userId": 188,
                "parentId": 0
            },
            {
                "id": 184,
                "name": "Niraj Jintendra Sharma",
                "userId": 189,
                "parentId": 0
            },
            {
                "id": 188,
                "name": "Priyanshu Saspal",
                "userId": 193,
                "parentId": 0
            },
            {
                "id": 192,
                "name": "Amit Kumar",
                "userId": 197,
                "parentId": 0
            },
            {
                "id": 196,
                "name": "Shivam Srivastava",
                "userId": 205,
                "parentId": 0,
                "children": [
                    {
                        "id": 199,
                        "name": "Ayush Mehta",
                        "userId": 208,
                        "parentId": 196,
                        "children": [
                            {
                                "id": 207,
                                "name": "Shruti Basu",
                                "userId": 216,
                                "parentId": 199
                            },
                            {
                                "id": 209,
                                "name": "Yogesh Rawat",
                                "userId": 218,
                                "parentId": 199
                            }
                        ]
                    },
                    {
                        "id": 201,
                        "name": "Kartik Kamra",
                        "userId": 210,
                        "parentId": 196,
                        "children": [
                            {
                                "id": 204,
                                "name": "Riya Panwar",
                                "userId": 213,
                                "parentId": 201
                            }
                        ]
                    },
                    {
                        "id": 202,
                        "name": "Mandip Singh",
                        "userId": 211,
                        "parentId": 196
                    },
                    {
                        "id": 203,
                        "name": "Rahul Panwar",
                        "userId": 212,
                        "parentId": 196
                    },
                    {
                        "id": 208,
                        "name": "Ujjwal Chawla",
                        "userId": 217,
                        "parentId": 196,
                        "children": [
                            {
                                "id": 198,
                                "name": "Chaitanya Mitra",
                                "userId": 207,
                                "parentId": 208
                            },
                            {
                                "id": 200,
                                "name": "Kanishk Sharma",
                                "userId": 209,
                                "parentId": 208
                            },
                            {
                                "id": 205,
                                "name": "Sarthak Kamra",
                                "userId": 214,
                                "parentId": 208
                            },
                            {
                                "id": 206,
                                "name": "Shreya Sharma",
                                "userId": 215,
                                "parentId": 208
                            },
                            {
                                "id": 212,
                                "name": "Saksham Chawla",
                                "userId": 221,
                                "parentId": 208
                            },
                            {
                                "id": 213,
                                "name": "Shikhar Saxena",
                                "userId": 222,
                                "parentId": 208
                            }
                        ]
                    }
                ]
            },
            {
                "id": 215,
                "name": "Jaffar Shad",
                "userId": 226,
                "parentId": 0
            },
            {
                "id": 216,
                "name": "Amjad Khan",
                "userId": 227,
                "parentId": 0
            },
            {
                "id": 217,
                "name": "Shubhika",
                "userId": 228,
                "parentId": 0
            },
            {
                "id": 218,
                "name": "Srishti Maurya",
                "userId": 229,
                "parentId": 0
            },
            {
                "id": 219,
                "name": "Pratyush Praveen",
                "userId": 230,
                "parentId": 0
            },
            {
                "id": 220,
                "name": "Anam Suhail",
                "userId": 231,
                "parentId": 0
            },
            {
                "id": 221,
                "name": "test name",
                "userId": 233,
                "parentId": 0
            },
            {
                "id": 222,
                "name": "Amit Rajput",
                "userId": 234,
                "parentId": 0
            }
        ]
    }
}
```
<div id="execution-results-GETapi-employees-getChildNodes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-employees-getChildNodes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees-getChildNodes"></code></pre>
</div>
<div id="execution-error-GETapi-employees-getChildNodes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees-getChildNodes"></code></pre>
</div>
<form id="form-GETapi-employees-getChildNodes" data-method="GET" data-path="api/employees/getChildNodes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-employees-getChildNodes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-employees-getChildNodes" onclick="tryItOut('GETapi-employees-getChildNodes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-employees-getChildNodes" onclick="cancelTryOut('GETapi-employees-getChildNodes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-employees-getChildNodes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/employees/getChildNodes</code></b>
</p>
</form>


## api/employees/getParentNodes




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/employees/getParentNodes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/employees/getParentNodes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "ERR",
    "status": "User not found or not a valid user."
}
```
<div id="execution-results-GETapi-employees-getParentNodes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-employees-getParentNodes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees-getParentNodes"></code></pre>
</div>
<div id="execution-error-GETapi-employees-getParentNodes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees-getParentNodes"></code></pre>
</div>
<form id="form-GETapi-employees-getParentNodes" data-method="GET" data-path="api/employees/getParentNodes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-employees-getParentNodes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-employees-getParentNodes" onclick="tryItOut('GETapi-employees-getParentNodes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-employees-getParentNodes" onclick="cancelTryOut('GETapi-employees-getParentNodes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-employees-getParentNodes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/employees/getParentNodes</code></b>
</p>
</form>


## api/employees/calculateCtc




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/employees/calculateCtc" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/employees/calculateCtc"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "statusCode": "TXN",
    "status": "CTC calculated successfully.",
    "data": {
        "annualCtc": 0,
        "monthlyCtc": 19060,
        "basic": 9530,
        "hra": 0,
        "lta": 0,
        "ma": 0,
        "epf": 1143.6,
        "esi1": 546.69,
        "adminCharges": 95.3,
        "foodCoupon": 1000,
        "otherAllowances": 7291.1,
        "grossSalary": 16821.1,
        "pf": 0,
        "esi2": 0,
        "healthInsurance": 281,
        "costToCompany": 19060,
        "netSalary": 16540.1
    }
}
```
<div id="execution-results-GETapi-employees-calculateCtc" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-employees-calculateCtc"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-employees-calculateCtc"></code></pre>
</div>
<div id="execution-error-GETapi-employees-calculateCtc" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-employees-calculateCtc"></code></pre>
</div>
<form id="form-GETapi-employees-calculateCtc" data-method="GET" data-path="api/employees/calculateCtc" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-employees-calculateCtc', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-employees-calculateCtc" onclick="tryItOut('GETapi-employees-calculateCtc');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-employees-calculateCtc" onclick="cancelTryOut('GETapi-employees-calculateCtc');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-employees-calculateCtc" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/employees/calculateCtc</code></b>
</p>
</form>



