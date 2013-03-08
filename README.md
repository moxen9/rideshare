#Getting Started

##Prerequisites:

Our project has a few dependencies that you must have before you get started.
First, you must have python installed on your computer. If you do not have
python installed, you get get it from http://python.org/download/ or install it
using your package manager.

You will also want to have pip. Pip is a python package installer, which will
install the packages necessary for the app to run. Installation will vary by
your package manager, but on Ubuntu/Debian you should be able install it using
the following command:

    sudo apt-get install python-pip

Once pip is installed we need to get the project. You can clone the project
using git from github using the following command:

    git clone https://github.com/osu-cs361-w13/rideshare.git

If you dont have git, or aren’t familiar, you can download a compressed tarball
of the latest code using the following link:
https://github.com/osu-cs361-w13/rideshare/archive/master.zip

##Installation

From the command line, change to the directory containing the source code, and
run the following commands:

    pip install -r requirements.txt
    python create_db.py

This will install all the dependencies and create the initial database
schema/entries. Once the dependencies are installed you can run the development
web server by running the following command:

    python run.py

You should see text output like this:

    * Running on http://127.0.0.1:5000/

You can now visit that URL and the project should be running.
