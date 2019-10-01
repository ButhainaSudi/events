# README.md template (With Manage as sample)
# Manage
Manages businesses simplified
Currently available for **Pharmacy** , **Mechanical** businesses/modules , for more see [Manage](https://www.biasharaplus.com)
>The introduction shall consist of a brief paragraph or two that summarizes the purpose and function of this project.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes as well as building for deployment on different platforms

### Prerequisites
* [Java JDK 1.8](http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html)
* [Java JRE 8](https://www.oracle.com/technetwork/java/javase/downloads/jre10-downloads-4417026.html)
* [IntelliJ Idea](https://www.jetbrains.com/idea/download/)
* [Gradle](https://gradle.org/)
* [Lombok plugin](https://plugins.jetbrains.com/plugin/6317-lombok-plugin)

>The prerequisite section shall make it clear whether this project requires anything outside of project core to work (modules, libraries, etc). List _all_ requirements here, including those that follow indirectly from another module.

### Installing

  - Open project with [IntelliJ Idea](https://www.jetbrains.com/idea/download/)
  - Install [Lombok plugin](https://plugins.jetbrains.com/plugin/6317-lombok-plugin)
  - Import dependeces with [Gradle](https://gradle.org/)
  - Configure JAVA running configuration in [IntelliJ Idea](https://www.jetbrains.com/idea/download/)
  - Sync project and run app to verify setup
>The installation section shall make it clear how to install the module and get development environment running  . However, if the steps to install the module follow the standard instructions for the provided project framework , don't reinvent the wheel — simply provide a link and explain in detail any steps that may diverge from these steps. 
>*Consider replacing this section with a standalone **INSTALL.md** file if your installation instructions are especially complex*

### Configuration
- Choose application mode on first launch
- Application mode defines the functioning of the whole application __See title to see available modes__ 
- Application mode can be changed manually through the manifest file located in manage_config file the given platform/developing environment 
>The configuration section is necessary even when little configuration is required. Use this section to list special notes about the configuration of this module – including but not limited to permissions. This section is particularly important if the module requires additional configuration outside of the projects framework

### Resources
- Find project resources in [Drive Manage Resources](https://www.design.com)
>Documentation and other resources related to the projects, mostly this should be links to the resources if available

### Deployment

  - Ensure your git repository is updated
```
git fetch origin
git checkout master
git reset --hard origin/master
```
  - Merge develop into master and update upstream server
```
  git merge --no-ff origin/develop
  git push origin master
```
  - Create release build for the provided platform
```
./gradlew jfxNative
```
  - Review build progress in [CircleCI Release Workflow](https://circleci.com/gh/Exygy/workflows/chomoka/tree/release)

>Add additional notes about how to deploy this on a live system
>Show __CircleCi__ link to project if available 

### Contribution
- Develop branch is the default branch 
- Master branch reflect latest deployed live version of the app
- See [CONTRIBUTION.md](https://github.com/iPFSoftwares/starter-packs/blob/master/README.md) for more details on the code of conduct, and contribution guide
- Please note:
	1) App must be built in there specific platform (Window , MacOS)
	2) Associated files for deployment are found in resource directory (main/resources)
	3) Release build icons are found in 
		- Windows - (main/deploy/window)
		- MacOs - (main/deploy/mac)
>Explain on how one can start contributing to the project, highlighting code standard and other agreeable standards followed by the company
>_Any additional note needed for contribution that is not default to all projects should be added here_   

### Licence
[IPF Softwares, Version 1.0](https://www.ipfsoftwares.com/about)
