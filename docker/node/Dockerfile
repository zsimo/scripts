#take a base container
#FROM node:12-stretch
FROM node:12-alpine

# node container has a node user, along with the root one
USER node

RUN mkdir /home/node/code

WORKDIR /home/node/code

# first copy files used to install dependencies
COPY --chown=node:node package.json yarn.lock ./

# install dependencies (re-install only if the prevous 2 files changed)
RUN yarn

# copy all file (except the onese listed in .dockerignore)
COPY --chown=node:node . .

CMD ["node", "index.js"]
 