#!/usr/bin/env python
import os

PROJECT_DIRECTORY = os.path.realpath(os.path.curdir)


if __name__ == '__main__':
    print 'Please, run the command "npm install" and after that "grunt init" on the directory {dir}'.format(
        dir=PROJECT_DIRECTORY
    )