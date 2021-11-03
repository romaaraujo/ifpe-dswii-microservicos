# using a python small basic image
FROM php

# exposing our app port in docker internal network
EXPOSE 5000

# creates a dir for our application
WORKDIR /mult

# copy our requirements.txt file and install dependencies
#COPY requirements.txt .
#RUN pip install -r requirements.txt

# copy the rest of our application
COPY . .
# run the application
CMD php -S 0.0.0.0:5000 -t public/