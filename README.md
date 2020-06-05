# Team Fury Script Tester
This is the repository for the stage 2 promotion task for HNG i7. Each team member is expected to create a file in the scripts folder with any programming language of their choice (preferrably JavaScript, PHP and Python).

For quick navigation:

- [Getting Started](#getstarted)
- [Creating Your Script](#createscript)
- [Styleguides](#styleguide)
- [Running a Local Test Server](#runserver)
- [Debugging PHP](#debug)
- [Testing Your Script](#test)
- [Making a Pull Request](#pullrequest)


## <a name="getstarted"></a> Getting Started - Script Task for Stage 2

### <a name="install"></a> Installation
To get started locally, follow these instructions:

1. Unless you've already done so, you will first need to [make a fork of this repo](https://www.github.com/jgodstime/team-fury-1/fork).
2. Use your forked repo to clone to your local repository by using `git`.
3. Make sure that you have XAMPP 7.x.x or later installed (remember your install path for later). See instructions [here](https://www.apachefriends.org/download.html).

## <a name="createscript"></a> Creating Your Script
The stage 2 task requres each and every member in Team Fury to create a script. Read further for more information.

### The Goal
The goal of the stage 2 task is to create a script file that outputs a string in the following format:

`Hello World, this is <Your Full Name> with HNGi7 ID <Your HNG ID> and email <Your Email> using <Your Programming Language> for stage 2 task`.

### Things To Consider
1. Your script file should be located in the scripts folder.
#### Folder Structure
scripts(folder)
associated script files...

2. Your script file should be named using this convention: `<your-username>.(js or php or py)`.
2. The 4 required data fields should be variables.
3. Your programming language should either be: PHP, Python, or JavaScript.

## <a name="styleguide"></a> Styleguides

### Git Commit Messages
 - Use the present tense ("Add feature" not "Added feature")
 - Use the imperative mood ("Run to output..." not "Runs to output...")
 - Limit the first line to 72 characters or less
 - Reference issues and pull requests liberally after the first line
 - When only changing documentation, include [ci skip] in the commit title

### For Javascipt Developers
 - After forking and cloning the repository
 - Create a new file in the scripts folder(strictly the scripts folder) with your Slack username 
 - All JavaScript must adhere to [JavaScript Standard Style](https://standardjs.com/)
 - save the updated file and test it
    
    NOTE: Your Change should not break the existing code


### For Python Developers
 - After forking and cloning the repository
 - Create a new file in the scripts folder(strictly the scripts folder) with your Slack username 
 - All Python must adhere to [Python Standard Style](https://www.python.org/dev/peps/pep-0008/)
 - save the updated file and test it
    
    NOTE: Your Change should not break the existing code


### For PHP Developers
 - After forking and cloning the repository
 - Create a new file in the scripts folder(strictly the scripts folder) with your Slack username 
 - All PHP must adhere to [PHP Standard Style](https://www.php-fig.org/psr/psr-2/)
 - save the updated file and test it
    
    NOTE: Your Change should not break the existing code



## <a name="runserver"></a> Running a Local Test Server
To run the local test server, follow these instructions:

1. Move your local repo to your XAMPP htdocs folder `path/to/your/xampp/htdocs`.
2. Open the XAMPP Control Panel.
3. Start the Apache module.
4. In the URL bar of your preferred browser, go to `localhost/<local-repo-folder-name>/index.php`. The `<local-repo-folder-name>` is the folder name of the local repo you moved in step 1 above.

## <a name="debug"></a> Debugging PHP
To run a debugger on your PHP code, follow these instructions:

### For VS Code
1. See instructions [here](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug).

### For PhpStorm
1. See instructions [here](https://www.jetbrains.com/help/phpstorm/debugging-with-phpstorm-ultimate-guide.html).

### Others
For other IDEs, you can google how to setup debugging in your IDE.

Or you can create a PR adding instructions, on this README file, for your IDE.

## <a name="test"></a> Testing Your Script
To test your script, follow these instructions:

1. [Run a local test server](#runserver)
2. Check the outcome of your script through the website's UI.

## <a name="pullrequest"></a> Making a Pull Request
If your code passed on during testing, you will have to make a PR to the main repository's dev branch.

Follow these instructions:

1. On your local repo, commit your script to your remote repo.
2. On your remote repo, make a PR to the [main repository's dev branch](https://www.github.com/jgodstime/team-fury-1/tree/dev).

> Happy Hacking
