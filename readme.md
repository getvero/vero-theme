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

Make sure you've got `node` and `npm` installed. If you do, you can then run these different methods using `gulp`:

```
npx gulp clean
npx gulp scripts
npx gulp dev
```

## Staging

[![buddy pipeline](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918/badge.svg?token=2a3979fcf42e5530e6e3bd84a28555688ca38da468161718ddf08d0056e4ee19 "buddy pipeline")](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127918)

Manually deploy the branch you'd like using Buddy.

Staging deploys are viewable at:

- The end-to-end version via https://www-staging.getvero.com **(RECOMMENDED)**
- The raw install at WPEngine via http://resources-staging.getvero.com

## Production deployment

[![buddy pipeline](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127924/badge.svg?token=2a3979fcf42e5530e6e3bd84a28555688ca38da468161718ddf08d0056e4ee19 "buddy pipeline")](https://app.buddy.works/getvero/vero-theme/pipelines/pipeline/127924)

Simply merge to master, Buddy.works will take care of the rest.