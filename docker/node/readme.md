build a container using the dockerfile in the current directory
```sh
docker build --tag node-http .
docker run --rm --publish 3000:3000 node-http
docker run --rm --detach --publish 3000:3000 node-http
```  