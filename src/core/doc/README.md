# API specification

## Introduction

This is a Climbing-guide.net API spec, based on swagger.

### Requirements

Node 6.9.0 or higher, NPM 3 or higher.

## Getting started

### Prerequisites

* Run `npm install` in the root of the project.
* Run `npm i -g merge-yaml-cli` in the root of the project.
* Run `npm install -g redoc-cli` in the root of the project.

### Run your builds

To run your builds, you need to do the following commands:

```
merge-yaml -i api/modules/v1/src/core/doc/index.yaml api/modules/v1/src/*/doc/index.yaml -o api/modules/v1/src/core/doc/merged.yaml
```
To build referenced files into a single file.*The output will be placed to file: api/modules/v1/doc/merged.yaml*
```
redoc-cli bundle -o api/modules/v1/src/core/doc/doc.html api/modules/v1/src/core/doc/merged.yaml
```
To generate doc.html documentation file.*The output will be placed to file: api/modules/v1/doc/doc.html*
