

start ubuntu container and get into it
```sh
# -it interactive into the container
# --rm remove if it's exists
# --privileged access to all devices on the host
docker run -it --name ubuntu --rm --privileged ubuntu:bionic
docker run -it --name node --rm --privileged node bash
```

start ubuntu container, run a command and finish
```sh
docker run --name ubuntu --rm --privileged ubuntu:bionic cat /etc/issue
```

start ubuntu container and run it in background
```sh
# detach interactive
docker run -it --detach --name ubuntu --rm --privileged ubuntu:bionic
#same as
docker run -dit --name ubuntu --rm --privileged ubuntu:bionic
docker exec -it ubuntu bash
```

    
connect to a running container
```sh
docker exec -it docker-host bash
```  

show running containers
```sh
docker ps
```  

list available images
```sh
docker images
```  

build a container using the dockerfile in the current directory
```sh
docker build --tag my-node-container .
docker run my-node-container
```  
    
   