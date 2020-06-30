start
```sh
docker build --tag nginx-static-assets .
docker run --rm --detach --publish 8080:80 nginx-static-assets
```