#take a base container
FROM node:12-stretch

# node container has a node user, along with the root one
USER node

WORKDIR /home/node/code

COPY --chown=node:node index.js .

CMD ["node", "index.js"]
 