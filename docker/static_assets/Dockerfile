#BUILD STAGE
FROM node:12-stretch AS build

WORKDIR /build

#copy all files excluding dependencies (as per .dockerignore file)
COPY . .

#install dependencies and build assets
RUN yarn && npm run build


#RUNTIME STAGE (this stage does not need yarn)
FROM nginx:alpine
COPY --from=build /build/public /usr/share/nginx/html