FROM node:18-alpine AS build-stage

WORKDIR /vue_app

COPY package.json ./

RUN npm install

COPY . .

RUN npm run build && cp dist/home.html dist/index.html

FROM nginx:alpine

LABEL maintainer="donnie@thedadams.com"

COPY --from=build-stage /vue_app/dist /usr/share/nginx/html

EXPOSE 80
