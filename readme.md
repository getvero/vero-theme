# vero-theme
This README outlines the details of collaborating on the Vero marketing site and blog.

## Developing locally

### Pre-requisites

• You will need Docker and `docker-compose` installed on your machine.
• Clone [vero-styles](https://github.com/getvero/vero-styles)
• Clone [veropublic](https://github.com/getvero/veropublic)

### Installation

**Running Wordpress**
To run a full version of Wordpress, you need to clone down a copy of the repository `veropublic`. This is a full mirror of Wordpress and MySQL. Follow these steps to setup:

- git clone this repository
- change into the cloned directory
- run `git submodule add <vero-theme github url> wp-content/themes/vero`
- run `cd wp-content/themes/vero`
- do a `git pull`
- `cd` back to the main `veropublic` directory
- run `docker-compose up -d`

**Running our CSS styles**
To see the styles locally, clone down the `vero-styles` directory and do the following:

- `vero-styles`: `grunt local`
- Run `docker-compose up -d`
- Visit [http://localhost:8888/](http://localhost:8888/)

### Updating changes made to the database

If you need to force the database to update you can simply do:

- `docker-compose down` 
- `docker-compose up -d`

## Making changes

You **only want to make changes** inside the `wp-content/themes/vero` folder, as this is the actual theme. Open this in an editor of choice, like Sublime or Atom.

Note that you can login to the local WP instance as an administrator at [http://localhost:8888/login](http://localhost:8888/login) with username `vinitc` and password `hACO&bvpvhDPsL1C!eeLs*Zm`.

## Staging and deployment

Staging

[Here's a video](https://drive.google.com/open?id=1KunESEKMii-SH3WbUc6MP7cHxxNdArgv) of how to deploy to staging.

[![buddy pipeline](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918/badge.svg?token=bdea566d3feff8982be762737eab5f0fef4d9a282dc247160d737981285dde41 "buddy pipeline")](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918)

Production
TBC
