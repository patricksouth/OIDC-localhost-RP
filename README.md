

This is a local host example that uses CILogon as the OIDC OP. 
You need to register your localhost service with CILogon using the OIDC Config manager before this example will function.

Build the image with:

<b>docker build -t openidc-local:1 . </b>

To create the certs run the following:

<b>openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout src/server.key -out src/server.crt </b>

Start the service with:
<b>docker compose up </b>

From within a browser, access the localhost URL and accept invalid certs warning.

https://localhost:5001/ 



Follow the link "OIDC" and then 
"Access the protected page" and when prompted complete a Federated Login via the discovery service or the identity provider.

On the redirect after login, the local host maybe a little slow to respond, give it a chance.


<i>This is derivative work based on php:8-apache Docker image from: </i>

https://hub.docker.com/_/php/

<b>Notes for the OP</b>

Home URL: https://localhost.local:5001

Callback/redirect_uri parameter: https://localhost:5001/secure/redirect_uri
