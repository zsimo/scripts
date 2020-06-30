#BUILD STAGE
FROM node:12-stretch AS build

WORKDIR /build

COPY package.json yarn.lock ./
#install dependencies
RUN yarn
#copy all files excluding dependencies (as per .dockerignore file)
COPY . .

#RUNTIME STAGE (this stage does not need yarn)
FROM node:12-alpine
USER node
RUN mkdir /home/node/code
WORKDIR /home/node/code

#copy builded assetes from previous stage
COPY --from=build --chown=node:node /build .

CMD ["node", "index.js"]