FROM node:10
#Create app directory
WORKDIR /app
COPY ["package.json", "package-lock.json*", "./"]
RUN ls -al
RUN npm install
CMD ["npm","run","dev"]