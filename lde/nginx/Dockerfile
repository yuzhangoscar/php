FROM nginx:latest

RUN apt-get update && \
    apt-get install -y vim

# Copy the config file over
COPY ./nginx.conf /etc/nginx/nginx.conf

# Expose port 80 to allow incoming traffic
EXPOSE 80

# Start Nginx server
CMD ["nginx", "-g", "daemon off;"]
