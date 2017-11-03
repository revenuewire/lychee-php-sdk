#!/usr/bin/env bash

mkdir -p spec
mkdir -p dist
aws apigateway get-export --region us-west-2 --rest-api-id oee2l6t575 --stage-name v1 --export-type swagger spec/swagger.json
swagger-codegen generate -i ./spec/swagger.json -c codegen-php-config.json -l php --git-user-id revenuewire --git-repo-id lychee-php-sdk
