#!/bin/sh

release_note="Updated API [skip ci]"
remote_repo=https://git:${GIT_TOKEN}@github.com/keboola/looker-api.git
build_dir=build2
rm -rf $build_dir
git clone --single-branch --branch build --depth 1 $remote_repo $build_dir
rm -rf output/SwaggerClient-php/vendor
cp -r output/SwaggerClient-php/* $build_dir
cd $build_dir
git add .
git commit -m "$release_note\n\n$TRAVIS_JOB_WEB_URL"
DEPLOY_TAG=$(echo $TRAVIS_TAG | sed "s/build-//")
git tag $DEPLOY_TAG
git push origin --force $DEPLOY_TAG:$DEPLOY_TAG
