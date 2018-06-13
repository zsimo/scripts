- build a image via Powershell
    ```sh
    Get-Content Dockerfile | docker build -t simone_centos:1 -
    ```


- create a container and make it interactive
    ```sh
    docker run -it --name centos7 centos bash
    ```
- start an existing container
    ```sh
    docker start centos7
    ```
- ssh inside the running container
    ```sh
    docker exec -it centos7 bash
    ```



- show all docker containers
    ```sh
    docker ps -a
    ```
- remove all containers (active and inacticve)
    ```sh
    docker rm -f $(docker ps -qa)
    ```
- show all images
    ```sh
    docker images
    ```

- remove one image
    ```sh
    docker rmi 848a860e2ea3
    ```








