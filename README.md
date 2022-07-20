# test-project
Create an EC2 Instance in AWS (free tier is fine) using Puppet, Ansible or Chef to install Wordpress and
add a blog post. This should all be done “from nothing” with no expected configuration or infrastructure
in place. The solution should be one or more scripts that will generate the image in a repeatable way.
The image selected should be as bare bones as possible. Don’t use an AWS image that already has a
webserver installed, for example.
The code for this assessment should be pushed into Github or Bitbucket to review.
***
The instance, once running, should:
1) Have a webserver to run Wordpress
2) On the instance, install Docker
3) Create a Docker container with MySQL running in it (it is okay to utilize a Docker container that
already has MySQL installed)
4) Install Wordpress using the webserver from step 1 and MySQL inside Docker from step 3
5) Parameterize the Wordpress install so that there is a way to pass in a custom URL and have it
loaded into the Wordpress config so it is there on first launch. (In other words I should be able
to specific my own custom URL like http://myblog.com somehow)
6) Add a new post in the blog with the current weather state (e.g., cloudy, rainy, sunny),
temperature and icon of current weather state of Chicago, IL USA using the free API
MetaWeather https://www.metaweather.com/api/
7) Once instantiated, the user should be able to access this instance and see the blog post
