## Local deployment

You will need Docker and `docker-compose` installed on your machine.

Once installed, run:

```
docker-compose up -d
```

**Note:** You can login to the local WP instance as an administrator at [http://localhost:8888/login](http://localhost:8888/login) with username `vinitc` and password `hACO&bvpvhDPsL1C!eeLs*Zm`.

**Running our CSS styles**
To see the styles when running locally you will also need to be running the `vero-styles` repository.

## Compiling JS and CSS in this repository

We use the WP plugin Autoptimize to minify our CSS/JS.

## Staging

[![buddy pipeline](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918/badge.svg?token=2a3979fcf42e5530e6e3bd84a28555688ca38da468161718ddf08d0056e4ee19 "buddy pipeline")](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918)

Manually deploy the branch you'd like using Buddy.

Staging deploys are viewable at:

- The end-to-end version via https://www-staging.getvero.com **(RECOMMENDED)**
- The raw install at WPEngine via http://resources-staging.getvero.com

## Production deployment

[![buddy pipeline](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127924/badge.svg?token=2a3979fcf42e5530e6e3bd84a28555688ca38da468161718ddf08d0056e4ee19 "buddy pipeline")](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127924)

Simply merge to master, Buddy.works will take care of the rest.

## Exporting database changes

If you make some important changes to the underlying database and need those reflected for other users, you will want to do this:

```
docker exec -i vero-theme_db_1 mysqldump -uwordpress -pwordpress wordpress > ./.data/db_seed/wordpress.sql
```

This will export the database into the folder that Docker uses to bootstrap new databases.

## Nginx rewrite rules

We have these installed on WPEngine (change `www` to `www-staging` if testing on staging):

```
rewrite ^(?!\/wp-admin|\/wp-login|\/search)([^.]*[^\/])$ $1/ permanent;

if ($http_x_vero_proxied = "") {
    rewrite ^\/(?!wp-admin|wp-login|wp-json|wp-content|wp-includes)(.*) https://www-staging.getvero.com/$1 permanent;
}
```

## Running specs / Percy.io
[![This project is using Percy.io for visual regression testing.](https://percy.io/static/images/percy-badge.svg)](https://percy.io/d4c3a9ef/www.getvero.com-resources)

For now this is manual. This should only ever be run on `master` or on `develop`.

The correct token is found in this project: https://percy.io/d4c3a9ef/www.getvero.com-resources

When on `master` we want to run specs against `www.getvero.com`. To do so, run:

```
export PERCY_TOKEN=GET_TOKEN_FOR_PROJECT
npx percy exec -- nightwatch tests/percy.js -e production
```

When on `develop` we want to run specs against `www-staging.getvero.com`. To do so, run:

```
export PERCY_TOKEN=GET_TOKEN_FOR_PROJECT
npx percy exec -- nightwatch tests/percy.js -e development
```