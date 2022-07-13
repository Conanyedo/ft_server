# ft_server

This project aims to create a web server using Nginx, and run multiple services: Wordpress, phpMyAdmin, and a SQL database.
The server is deployed on Docker.

#Building, running and cleaning up containers

We should set up all these services using a Dockerfile based on Debian image.

`docker build -t ft_server .` will build our Docker image using Dockerfile on the current directory and name it "ft_server".

`docker run -it --rm -p 80:80 -p 443:443 ft_server` This will run a container from that image, flags:

    - -it open its terminal and allow us to execute commands inside (useful to manually check the contents of the container)
    - --rm automatically remove the container once it's stopped
    - -p link the necessary ports between the container and our computer (80 and 443), port forwarding.

`docker images` list all images.

`docker ps` list all containers.

`docker rmi $(docker images -q) will remove all the images.

docker rm $(docker ps -qa) will remove all the containers.

`docker system prune` will cleanup the temporary files and the rest of remaining used space.
