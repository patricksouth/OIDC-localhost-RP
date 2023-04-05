

This is a local host example that uses https://cilogon.org as the OIDC OP. 
You need to register this service with CILogon using the OIDC Config manager.

Build the image with 
_ docker build -t openidc-local:1 . _

create the certs
openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout src/server.key -out src/server.crt

start the service with docker compose up

With a browser, access 
https://localhost:5001/ 

and accept invalid certs warning.

Follow the link "OIDC" and then 
"Access the protected page" and when prompted complete a Federated Login via the discovery service or the identity provider.

On the redirect after login, the local host maybe a little slow to respond, give it a chance.


# This is derivative work based on php:8-apache Docker image.